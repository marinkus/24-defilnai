<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SquareController extends Controller
{

    public function redSquare()
    {
        return Inertia::render('RedSquare', [
            'size' => '200'
        ]);
    }

    // public function redSquareBlade()
    // {
    //     return view('RedSquare', [
    //         'color' => 'crimson',
    //         'size' => '78'
    //     ]);
    // }

}
