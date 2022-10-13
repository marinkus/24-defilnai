<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Image;


class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sort & filter

        //         if ($request->cat) {
        //     $movies = Movie::where('category_id', $request->cat);
        // } else {
        //     $movies = Movie::where('id', '>', 0);
        // }

        // // Sort & search
        // if ($request->sort == 'rate_asc') {
        //     $movies->orderBy('rating');
        // } else if ($request->s) {

        //     $search = explode(' ', $request->s);
        //     if (count($search) == 1) {
        //         $movies = Movie::where('title', 'like', '%' . $request->s . '%');
        //     } else {
        //         $movies = Movie::where('title', 'like', '%' . $search[0] . '%' . $search[1] . '%')
        //             ->orWhere('title', 'like', '%' . $search[1] . '%' . $search[0] . '%');
        //     }
        // } else if ($request->sort == 'rate_desc') {
        //     $movies->orderBy('rating', 'desc');
        // } else if ($request->sort == 'title_asc') {
        //     $movies->orderBy('title');
        // } else if ($request->sort == 'title_asc') {
        //     $movies->orderBy('title', 'desc');
        // } else if ($request->sort == 'price_asc') {
        //     $movies->orderBy('price');
        // } else if ($request->sort == 'price_asc') {
        //     $movies->orderBy('price', 'desc');
        // }



        // return view('home.index', [
        //     'movies' => $movies->paginate(5)->withQueryString(),
        //     'categories' => Category::orderBy('title')->get(),
        //     'cat' => $request->cat ?? '0',
        //     'sort' => $request->sort ?? '0',
        //     'sortSelect' => Movie::SORT_SELECT,
        //     's' => $request->s
        // ]);



        $dishes = Dish::paginate(15)->withQueryString();
        return view('dish.index', ['dishes' => $dishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('dish.create', ['restaurants' => $restaurants]);
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
                'price' => 'required|numeric|min:1|max:100',
                'restaurant_id' => 'required|numeric|gt:0',
            ],
            [
                'restaurant_id.gt' => 'Choose restaurant'
            ]
        );
        $dish = new Dish;



        if ($request->file('image')) {
            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;

            $Image = Image::make($image)->resize(100, 100);

            $Image->save(public_path() . '/dishes/' . $file);

            // $image->move(public_path() . '/dishes', $file);

            $dish->image = asset('/dishes') . '/' . $file;
        }
        $dish->title = $request->title;
        $dish->price = $request->price;
        $dish->restaurant_id = $request->restaurant_id;
        $dish->save();
        return redirect()->route('dish_index')->with('msg', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {

        return view('dish.show', ['dish' => $dish]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $restaurants = Restaurant::all();
        return view('dish.edit', ['dish' => $dish, 'restaurants' => $restaurants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $dish->title = $request->title;
        $dish->price = $request->price;
        $dish->restaurant_id = $request->restaurant_id;

        $request->validate(
            [
                'title' => 'required|min:3|max:20',
                'price' => 'required|numeric|min:1|max:100',
                'restaurant_id' => 'required|numeric|gt:0',
            ]
        );

        if ($request->delete_image) {
            unlink(public_path() . '/dishes/' . pathinfo($dish->image, PATHINFO_FILENAME) . '.' . pathinfo($dish->image, PATHINFO_EXTENSION));
            $dish->image = null;
        }

        if ($request->file('image')) {
            if ($dish->image) {
                unlink(public_path() . '/dishes/' . pathinfo($dish->image, PATHINFO_FILENAME) . '.' . pathinfo($dish->image, PATHINFO_EXTENSION));
            }
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
            $Image = Image::make($image)->resize(200, 200);
            $Image->save(public_path() . '/dishes/' . $file);
            $dish->image = asset('/dishes') . '/' . $file;
        }

        $dish->save();
        return redirect()->route('dish_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('dish_index');
    }
}
