<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use Illuminate\Http\Request;


class WishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishes = Wish::all();
        return view('wishes.index', ['wishes' => $wishes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wishes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wish = new Wish;
        $wish->title = $request->title;
        $wish->description = $request->description;
        $wish->name = $request->name;
        $wish->class = $request->class;
        $wish->link = $request->link;
        $wish->save();
        return redirect(route('index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        return view('wishes.edit', ['wish' => $wish]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWishRequest  $request
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wish $wish)
    {
        $wish->title = $request->title;
        $wish->description = $request->description;
        $wish->name = $request->name;
        $wish->class = $request->class;
        $wish->link = $request->link;
        $wish->save();
        return redirect(route('index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wish $wish)
    {
        $wish->delete();
        return redirect()->route('index');
    }
}
