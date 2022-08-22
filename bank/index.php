<?php
session_start();


define('INSTALL', '/defilnai/bank/');
define('DIR', __DIR__ . '/');
define('URL', 'http://localhost/defilnai/bank/');

router();



function router() {
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);
    $method = $_SERVER['REQUEST_METHOD'];

    $users = json_decode(file_get_contents(__DIR__ . '/users.json', 1));
    foreach ($users as $user) {
        if ($method == 'GET' && count($url) == 1 && $url[0] == "addFunds?id=$user->id") {
            view('addFunds');
        }
        else if ('POST' == $_SERVER['REQUEST_METHOD']) {
            $funds = $_POST['funds'];
            $idNumber = $_POST['id'];
            $users = json_decode(file_get_contents(__DIR__ . '/users.json', 1));
            foreach ($users as &$user) {
                if ($idNumber == $user->id) {
                    $user->id += $funds;
                }
            }
            file_put_contents(__DIR__ . '/users.json', json_encode($users));
            $id = '';
        }
    }
    if ($method == 'GET' && count($url) == 1 && $url[0] == 'home') {
        view('home');
    }
    if ($method == 'GET' && count($url) == 1 && $url[0] == 'error') {
        view('error');
    }
    else if ($method == 'GET' && count($url) == 1 && $url[0] == 'create') {
        view('create');
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'create') {
        view('create');
    }
    else if ($method == 'GET' && count($url) == 1 && $url[0] == 'accounts') {
        view('accounts');
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'accounts') {
        view('accounts');
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'accounts') {
        view('accounts');
    }


}

function view($tmp) {
    require DIR . 'pages/' . $tmp . '.php';
}

function redirect($location) {
    header('Location: '. URL . $location . '.php');
    die;
}

