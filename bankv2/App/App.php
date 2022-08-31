<?php

namespace App;

use App\Controllers\HomeController as HC;
use App\Controllers\UserController as UC;

class App
{
    static public function start()
    {
        self::router();
    }

    static public function router()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', $url);
        array_shift($url);
        $method = $_SERVER['REQUEST_METHOD'];

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