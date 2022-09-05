<?php

namespace App\Controllers;


use App\App;

class ApiController
{

    public function show()
    {
        if (isset($_SESSION['distance'])) {
            $distance = $_SESSION['distance'];
            unset($_SESSION['distance']);
        }
        return App::view('api_form', ['title' => 'Select from', 'result' => $distance ?? '']);
    }

    public function doApi()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.distance24.org/route.json?stops=' . $_POST['from'] . '|' . $_POST['where']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $output = json_decode($output);

        $_SESSION['distance'] = [
            'from' => $_POST['from'], 
            'where' => $_POST['where'], 
            'distance' => $output->distance,
        'from_link' => $output->stops[0]->wikipedia->home,
        'where_link' => $output->stops[1]->wikipedia->home
    ];
        return App::redirect('api/go');
    }
}
