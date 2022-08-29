<?php
namespace App\Controllers;


use App\App;

class HomeController {
    public function home() {
        $title = 'H-O-M-E';
        return App::view('home', ['title' => $title]);
    }
}