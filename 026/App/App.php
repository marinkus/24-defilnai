<?php

namespace App;

use App\Controllers\HomeController as HC;
use App\Controllers\AnimalController as AC;
use App\Controllers\LoginController as LC;
use App\Controllers\ApiController as Api;
use App\Controllers\ReactController as RC;
use App\Middlewares\Auth;

class App
{


    static public function start()
    {
        session_start();
        self::router();
    }



    static public function router()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

        if (!Auth::authorize($url)) {
            return self::redirect('login');
        }

        if ($method == 'GET' && count($url) == 1 && $url[0] == '') {
            return ((new HC)->home());
        }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'create') {
            return ((new AC)->create());
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'animals' && $url[1] == 'store') {
            return ((new AC)->store());
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == 'animals') {
            return ((new AC)->list()); //  && $url[1] == 'list' ir count 2 gali but
        }
        if ($method == 'GET' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'edit') {
            return ((new AC)->edit((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'update') {
            return ((new AC)->update((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'animals' && $url[1] == 'delete') {
            return ((new AC)->delete((int) $url[2]));
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == 'login') {
            if (Auth::isLogged()) {
                return self::redirect('');
            }
            return ((new LC)->login());
        }
        if ($method == 'POST' && count($url) == 1 && $url[0] == 'login') {
            return ((new LC)->doLogin());
        }
        if ($method == 'POST' && count($url) == 1 && $url[0] == 'logout') {
            return ((new LC)->logout());
        }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return ((new Api)->show());
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'api' && $url[1] == 'go') {
            return ((new Api)->doApi());
        }

        // React

        if ($method == 'OPTIONS') {
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
            header('Access-Control-Allow-Headers:Content-Type');
        }
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list') {
            return ((new RC)->list());
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'react' && $url[1] == 'list') {
            return ((new RC)->store());
        }
        if ($method == 'DELETE' && count($url) == 3 && $url[0] == 'react' && $url[1] == 'list') {
            return ((new RC)->delete($url[2]));
        }
        if ($method == 'PUT' && count($url) == 3 && $url[0] == 'react' && $url[1] == 'list') {
            return ((new RC)->update($url[2]));
        }
    }

    static public function view($name, $data = [])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }

    static public function json(array $data)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
        header("Access-Control-Allow-Headers: X-Requested-With");
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    static public function redirect($where)
    {
        header('Location: ' . URL . $where);
    }
}
