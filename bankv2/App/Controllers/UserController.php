<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class UserController
{
    public function create()
    {
        return App::view('user_create', ['title' => 'Create new user']);
    }

    public function store()
    {
        Json::connect()->create([
            'fname' => $_POST['fname'],
            'sname' => $_POST['sname'],
            'iban' => $_POST['iban'],
            'idnumber' => $_POST['idnumber']
        ]);
        return App::redirect('');
    }
    public function list()
    {
        return app::view('users_list', [
            'title' => 'Users list',
            'users' => Json::connect()->showAll()
        ]);
    }
}