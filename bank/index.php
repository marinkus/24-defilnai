<?php
session_start();

define('INSTALL', '/defilnai/bank/');
define('DIR', __DIR__ . '/');
define('URL', 'http://localhost/defilnai/bank/pages/');

router();

function router() {
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);
    $method = $_SERVER['REQUEST_METHOD'];
    
    if ($method == 'GET' && count($url) == 1 && $url[0] == 'home') {
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

