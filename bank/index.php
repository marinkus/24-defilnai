<?php
session_start();


define('INSTALL', '/defilnai/bank/');
define('DIR', __DIR__ . '/');
define('URL', 'http://localhost/defilnai/bank/');
require DIR . '/classes/Account.php';
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
        else if ('POST' == $method && count($url) == 1 && $url[0] == "addFunds?id=$user->id") {
            $users = json_decode(file_get_contents(__DIR__ . '/users.json', 1));
            $funds = $_POST['funds'];
            validateNegativeNumber($funds);
            $idNumber = $_POST['id'];
            foreach ($users as $user) {
                if ($idNumber == $user->id) {
                    $user->funds += $funds;
                    file_put_contents(__DIR__ . '/users.json', json_encode($users));
                    if ($method == 'POST' && count($url) == 1 && $url[0] == "addFunds?id=$user->id") {
                        view('addFunds');
                    }
                } 
            }
            unset($users);
        }
        else if ($method == 'GET' && count($url) == 1 && $url[0] == "chargeFunds?id=$user->id") {
            view('chargeFunds');
        }
        else if ('POST' == $method && count($url) == 1 && $url[0] == "chargeFunds?id=$user->id") {
            $users = json_decode(file_get_contents(__DIR__ . '/users.json', 1));
            $funds = $_POST['funds'];
            validateNegativeNumber($funds);
            $idNumber = $_POST['id'];
            foreach ($users as $user) {
                if ($idNumber == $user->id) {
                    negativeBalance($user->funds, $funds);
                    $user->funds -= $funds;
                    file_put_contents(__DIR__ . '/users.json', json_encode($users));
                    if ($method == 'POST' && count($url) == 1 && $url[0] == "chargeFunds?id=$user->id") {
                        view('chargeFunds');
                    }
                } 
            }
            unset($users);
        }
        else if ($method == 'GET' && count($url) == 1 && $url[0] == "delete?id=$user->id") {
            view('delete');
        }
        else if ($method == 'POST' && count($url) == 1 && $url[0] == "delete?id=$user->id") {
            $users = json_decode(file_get_contents(__DIR__ . '/users.json', 1));
            $idNumber = $_POST['id'];
            foreach ($users as $key => &$user) {
                if ($user->id == $idNumber) {
                    unset($users[$key]);
                    file_put_contents(__DIR__ . '/users.json', json_encode($users));
                    view('delete');
                }
            }
        }
        unset($users);
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
    else if ($method == 'GET' && count($url) == 1 && $url[0] == 'delete') {
        view('home');
    }
    else if ($method == 'POST' && count($url) == 1 && $url[0] == 'accounts') {
        view('accounts');
    }
    else if ($method == 'GET' && $url[0] == 'index.php') {
        view('home');
    }
    


}

function view($tmp) {
    require DIR . 'pages/' . $tmp . '.php';
}

function redirect($location) {
    header('Location: '. URL . $location . '.php');
    die;
}

// Validations

function validateNegativeNumber ($number) {
    if ($number <= 0) {
        view('errorValidNumber');
        die;
    }
}
function negativeBalance($balance, $value) {
    if ($balance - $value < 0) {
        view('errorNegativeBalance');
        die;
    }
}

