<?php

namespace App\Controllers;


use App\App;
use App\DB\Json;

class ReactController
{
    public function list()
    {
        return App::json(Json::connect()->showAll());
    }
}
