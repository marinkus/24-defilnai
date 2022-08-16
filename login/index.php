<?php
session_start();

define('INSTALL', '/defilnai/login/');
define('DIR', __DIR__. '/');


router();




function router() {
    $url = $_SERVER['REQUEST_URI'];
    $url = str_replace(INSTALL, '', $url);
    $url = explode('/', $url);


    require DIR . 'inc/' . 'home.php';
}


function view ($tmp) {
    require DIR .'inc/'. $tmp . '.php';
}