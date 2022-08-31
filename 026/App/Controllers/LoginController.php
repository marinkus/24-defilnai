<?php

namespace App\Controllers;


use App\App;
use App\DB\Json;

class LoginController
{
    public function login()
    {
        $title = 'Login';


        return App::view('login', ['title' => $title]);
    }

    public function doLogin()
    {
        $users = Json::connect('users')->showAll();


        foreach ($users as $user) {
            if ($user['name'] == $_POST['name']) {
                if ($user['password'] == md5($_POST['password'])) {
                    $_SESSION['login'] = 1;
                    $_SESSION['user'] = $user;
                    return App::redirect('animals');
                }
            }
        }
        return App::redirect('login');
    }
}
