<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use \Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $mechanics = match($request->sort) {
            'name_asc' => Mechanic::orderBy('name', 'asc')->get(),
            'name_desc' => Mechanic::orderBy('name', 'desc')->get(),
            'surname_asc' => Mechanic::orderBy('surname', 'asc')->get(),
            'surname_desc' => Mechanic::orderBy('surname', 'desc')->get(),
            default => Mechanic::all()
        };

        return view('mechanic.index', ['mechanics' => $mechanics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mechanic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mechanic = new Mechanic;
        $mechanic->name = $request->name;
        $mechanic->surname = $request->surname;
        $mechanic->save();
        return redirect()->route('m_index')->with('success_msg', 'Sekmingai sukurta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function show(Mechanic $mechanic)
    {
        return view('mechanic.show', ['mechanic' => $mechanic]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function edit(Mechanic $mechanic)
    {
        return view('mechanic.edit', ['mechanic' => $mechanic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        $mechanic->name = $request->name;
        $mechanic->surname = $request->surname;
        $mechanic->save();
        return redirect()->route('m_index')->with('success_msg', 'Sekmingai pakeista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mechanic  $mechanic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mechanic $mechanic)
    {
        if($mechanic->getTrucks()->count()) {
            return redirect()->back()->with('info_msg', 'Turi atidirbti dvi savaites.');
        }
        $mechanic->delete();
        return redirect()->route('m_index');
    }
}
