<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Saloon;
use Illuminate\Http\Request;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::all();
        return view('master.index', ['masters' => $masters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $saloons = Saloon::all();
        return view('master.create', ['saloons' => $saloons]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $master = new Master;
        $master->name = $request->name;
        $master->surname = $request->surname;
        $master->saloon_id = $request->saloon_id;
        $master->save();
        return redirect()->route('master_index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(Master $master)
    {
        return view('master.show', ['master' => $master]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        return view('master.edit', ['master' => $master]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        $master->name = $request->name;
        $master->surname = $request->surname;
        $master->saloon_id = $request->saloon_id;
        $master->save();
        return redirect()->route('master_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        $master->delete();
        return redirect()->route('master_index');
    }
}
