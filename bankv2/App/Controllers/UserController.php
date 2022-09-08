<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;
use App\Services\Messages as M;

class UserController
{
    public function create()
    {
        return App::view('user_create', ['title' => 'Create new user']);
    }

    public function store()
    {
        $name = $_POST['fname'];
        $surname = $_POST['sname'];
        $iban = $_POST['iban'];
        $idnumber = $_POST['idnumber'];
        $funds = 0;
        // validation
        if ($this->validateName($name) || $this->validateName($surname) || $this->validateIdNumber($idnumber)) {
            Json::connect()->create([
                'fname' => $name,
                'sname' => $surname,
                'iban' => $iban,
                'idnumber' =>  $idnumber,
                'funds' => $funds
            ]);
            return App::redirect('');
        }
        return App::redirect('users/create');
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
    public function balance(int $id)
    {
        return App::view('user_balance', [
            'title' => 'Balance',
            'user' => Json::connect()->show($id)
        ]);
    }
    public function update(int $id)
    {
        Json::connect()->update($id, [
            'fname' => $_POST['fname'],
            'sname' => $_POST['sname'],
            'iban' => $_POST['iban'],
            'idnumber' => $_POST['idnumber'],
            'funds' => $_POST['funds']
        ]);
        return App::redirect('users');
    }
    public function delete(int $id)
    {
        Json::connect()->delete($id);
        return App::redirect('users');
    }


    // Validations lands here

    public function validateName(string $string)
    {
        if (!preg_match("/^([a-zA-Z' ]+)$/", $string)) {
            M::makeMsg('crimson', 'Vardas nėra validus');
        }
    }
    public function validateIdNumber(int $personalcode)
    {
        if (strlen($personalcode) != 11) {
            M::makeMsg('crimson', 'Asmens kodas nėra validus!');
        }
    }
}
