<?php

namespace App\Controllers;


use App\App;
use App\DB\Json;

class AnimalController
{
    public function create()
    {
        return App::view('animals_create', ['title' => 'New Animal']);
    }
}
