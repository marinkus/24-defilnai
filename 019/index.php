<?php

define('INSTALL', '/defilnai/019/');

router();

function router() {

    $url = $_SERVER['REQUEST_URI'];
    
    $url = str_replace(INSTALL, '', $url);
    
    $url = explode('/', $url);

    if ($url[0] == 'add-money') {
        require __DIR__ . '/inc/add.php';
    }
    else if (count($url) == 2 && $url[0] == 'remove-money') {
        require __DIR__ . '/inc/rem.php';
    }

    else {
        echo '<h1>404</h1>';
    }
    

}