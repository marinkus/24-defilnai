<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Dish;
use Auth;
use \Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('restaurant.index', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|min:3|max:20',
                'address' => 'required|min:3|max:20',
                'city' => 'required|min:3|max:20',
                'worktime' => 'required|min:3|max:5',
            ]
        );
        $restaurant = new Restaurant;
        $restaurant->title = $request->title;
        $restaurant->address = $request->address;
        $restaurant->city = $request->city;
        $restaurant->worktime = $request->worktime;
        $restaurant->save();
        return redirect()->route('restaurant_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, Dish $dish)
    {
        return view('restaurant.show', ['restaurant' => $restaurant, 'dish' => $dish]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurant.edit', ['restaurant' => $restaurant]);
    }





    public function rate(Request $request, Dish $dish)
    {

        $votes = json_decode($dish->votes ?? json_encode([]));

        if (in_array(Auth::user()->id, $votes)) {
            return redirect()->back()->with('msg', 'Jus jau balsavote');
        }

        $votes[] = Auth::user()->id;
        $dish->votes = json_encode($votes);


        $dish->rating_sum = $dish->rating_sum + $request->rate;
        $dish->rating_count++;
        $dish->rating = $dish->rating_sum / $dish->rating_count;
        $dish->save();
        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restaurant $restaurant)
    {
        $request->validate(
            [
                'title' => 'required|min:3|max:20',
                'address' => 'required|min:3|max:20',
                'city' => 'required|min:3|max:20',
                'worktime' => 'required|min:3|max:5',
            ]
        );
        $restaurant->title = $request->title;
        $restaurant->address = $request->address;
        $restaurant->city = $request->city;
        $restaurant->worktime = $request->worktime;
        $restaurant->save();
        return redirect()->route('restaurant_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('restaurant_index');
    }
}
