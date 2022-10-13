<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $restaurants = Restaurant::orderBy('id');

        if ($request->sort == 'title_asc') {
            $restaurants = Restaurant::orderBy('title');
        } else if ($request->sort == 'title_desc') {
            $restaurants = Restaurant::orderBy('title', 'desc');
        }

        return view('home', [
            'restaurants' =>  $restaurants->get(),
            'sortSelect' => Restaurant::SORT_SELECT,
            'sort' => $request->sort ?? '0',
        ]);
    }
}
