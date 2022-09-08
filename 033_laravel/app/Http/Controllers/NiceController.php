<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $abc = 'Dramblys')
    {
        $arr = ['Asilas', 'Karve', 'Bulius', 'Arklys', 'Kiaule'];
        return view('kitkas.fun', ['abc' => $abc, 'arr' => $arr]);
    }
}
