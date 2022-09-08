<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($duok, $abc = 'Dramblys')
    {
        return 'Skaicius atvaizduotas fun/{kiek}/{abc}: '.$duok .' '. $abc;
    }
}
