<?php

namespace App\Http\Controllers;

use App\Models\Saloon;
use \Illuminate\Http\Request;

class SaloonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saloons = Saloon::all();
        return view('saloon.index', ['saloons' => $saloons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('saloon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $saloon = new Saloon;
        $saloon->title = $request->title;
        $saloon->address = $request->address;
        $saloon->phone = $request->phone;
        $saloon->save();
        return redirect()->route('saloon_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function show(Saloon $saloon)
    {
        return view('saloon.show', ['saloon' => $saloon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function edit(Saloon $saloon)
    {
        return view('saloon.edit', ['saloon' => $saloon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Saloon $saloon)
    {
        $saloon->title = $request->title;
        $saloon->address = $request->address;
        $saloon->phone = $request->phone;
        $saloon->save();
        return redirect()->route('saloon_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saloon $saloon)
    {
        $saloon->delete();
        return redirect()->route('saloon_index');
    }
}
