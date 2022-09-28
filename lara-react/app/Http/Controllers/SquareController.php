<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Session;

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

    public function addSquare(Request $request)
    {
        $squares = session()->get('sq', []);
        $squares[] =  [
            'text' => $request->text,
            'color' => $request->color
        ];
        $squares = session()->put('sq', $squares);


        return response()->json([
            'msg' => 'OK'
        ]);
    }
    public function getSquare(Request $request)
    {
        $squares = Session::get('sq', []);

        return response()->json([
            'squares' => $squares
        ]);
    }

    public function resetSquares()
    {
        $squares = session()->put('sq', []);


        return response()->json([
            'msg' => 'OK'
        ]);
    }
}
