<?php

define('INSTALL', '/defilnai/login/');
define('DIR', __DIR__. '/');
define('URL', 'http://localhost/defilnai/login/');

router();

function router() {
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);
    $method = $SERVER['REQUEST_METHOD'];
    
}

function view($tmp) {
    require DIR . 'pages/' . $tmp . '.php';
}

function redirect($location) {
    header('Location: '. URL . $location);
    die;
}

