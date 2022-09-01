<?php

namespace App\Controllers;


use App\App;
use App\DB\Json;
use App\Services\Messages as M;

class LoginController
{
    public function login()
    {
        $title = 'Login';


        return App::view('login', ['title' => $title]);
    }

    public function logout()
    {
        unset($_SESSION['login'], $_SESSION['user']);
        M::makeMsg('grey', 'You are logged out');
        return App::redirect('');
    }
    public function doLogin()
    {
        $users = Json::connect('users')->showAll();


        foreach ($users as $user) {
            if ($user['name'] == $_POST['name']) {
                if ($user['password'] == md5($_POST['password'])) {
                    $_SESSION['login'] = 1;
                    $_SESSION['user'] = $user;
                    M::makeMsg('lime', 'You are logged in successfully.');
                    return App::redirect('animals');
                }
            }
        }
        M::makeMsg('crimson', 'Wrong username or password');
        // M::makeMsg('white', 'Dumbass'); Galima naudoti daugiau nei viena msg
        // M::makeMsg('crimson', 'Try again.');
        return App::redirect('login');
    }
}
