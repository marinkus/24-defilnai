<?php

namespace App\Http\Controllers;

use App\Models\Saloon;
use App\Http\Requests\StoreSaloonRequest;
use App\Http\Requests\UpdateSaloonRequest;

class SaloonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSaloonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaloonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function show(Saloon $saloon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function edit(Saloon $saloon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaloonRequest  $request
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaloonRequest $request, Saloon $saloon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saloon  $saloon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saloon $saloon)
    {
        //
    }
}
