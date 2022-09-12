<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $abc = 'Dramblys')
    {
        $arr = ['Asilas', 'Karve', 'Bulius', 'Arklys', 'Kiaule'];
        return view('kitkas.fun', ['abc' => $abc, 'arr' => $arr, 'duok' => $duok]);
    }

    public function showForm(Request $request)
    {

        // $result = $request->session()->pull('result', 'Nothing');
        // $result = $request->session()->get('result', 'Nothing');

        return view('form', ['result']);
    }

    public function doForm(Request $request)
    {
        $x = $request->x;
        $y = $request->y;

        $result = $x + $y;

        // $request->session()->put('result', $result);

        // $request->session()->flash('result', $result);

        return redirect()->route('show')->with('result', $result);

    }
}
