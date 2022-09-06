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
    public function edit(int $id)
    {
        return App::view('user_edit', [
            'title' => 'Edit Bank account',
            'user' => Json::connect()->show($id)
        ]);
    }
    public function update(int $id)
    {
        Json::connect()->update($id, [
            'fname' => $_POST['fname'],
            'sname' => $_POST['sname'],
            'iban' => $_POST['iban'],
            'idnumber' => $_POST['idnumber']
        ]);
        return App::redirect('users');
    }
    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('users');
    }
}