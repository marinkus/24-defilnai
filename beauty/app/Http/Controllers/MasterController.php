<?php

namespace App\Http\Controllers;

use App\Models\Master;
use App\Models\Saloon;
use Illuminate\Http\Request;
use Image;


class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masters = Master::paginate(15)->withQueryString();
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

        if ($request->file('image')) {
            $image = $request->file('image');

            $ext = $image->getClientOriginalExtension();

            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);

            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;

            $Image = Image::make($image)->resize(100, 100);

            $Image->save(public_path() . '/masters/' . $file);

            // $image->move(public_path() . '/masters', $file);

            $master->image = asset('/masters') . '/' . $file;
        }
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
        $saloons = Saloon::all();
        return view('master.edit', ['master' => $master, 'saloons' => $saloons]);
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

        if ($request->delete_image) {
            unlink(public_path() . '/masters/' . pathinfo($master->image, PATHINFO_FILENAME) . '.' . pathinfo($master->image, PATHINFO_EXTENSION));
            $master->image = null;
        }

        if ($request->file('image')) {
            if ($master->image) {
                unlink(public_path() . '/masters/' . pathinfo($master->image, PATHINFO_FILENAME) . '.' . pathinfo($master->image, PATHINFO_EXTENSION));
            }
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $file = $name . '-' . rand(100000, 999999) . '.' . $ext;
            $Image = Image::make($image)->resize(100, 100);
            $Image->save(public_path() . '/masters/' . $file);
            $master->image = asset('/masters') . '/' . $file;
        }

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
