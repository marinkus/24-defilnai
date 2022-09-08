<?php

namespace App;

use App\Controllers\HomeController as HC;
use App\Controllers\UserController as UC;
use App\Controllers\LoginController as LC;
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
        if ($method == 'GET' && count($url) == 2 && $url[0] == 'users' && $url[1] == 'create') {
            return ((new UC)->create());
        }
        if ($method == 'POST' && count($url) == 2 && $url[0] == 'users' && $url[1] == 'store') {
            return ((new UC)->store());
        }
        if ($method == 'GET' && count($url) == 1 && $url[0] == 'users') {
            return ((new UC)->list());
        }
        if ($method == 'GET' && count($url) == 3 && $url[0] == 'users' && $url[1] == 'edit') {
            return ((new UC)->edit((int) $url[2]));
        }
        if ($method == 'GET' && count($url) == 3 && $url[0] == 'users' && $url[1] == 'balance') {
            return ((new UC)->balance((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'users' && $url[1] == 'balance') {
            return ((new UC)->update((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'users' && $url[1] == 'update') {
            return ((new UC)->update((int) $url[2]));
        }
        if ($method == 'POST' && count($url) == 3 && $url[0] == 'users' && $url[1] == 'delete') {
            return ((new UC)->delete((int) $url[2]));
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
    }

    static public function view($name, $data = [])
    {
        extract($data);
        require DIR . 'resources/view/' . $name . '.php';
    }
    static public function redirect($where)
    {
        header('Location: ' . URL . $where);
    }
}