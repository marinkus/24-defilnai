<?php

namespace App\Http\Controllers;

use App\Models\Breakdown;
use App\Models\Mechanic;
use App\Models\Truck;
use Illuminate\Http\Request;

class BreakdownController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mechanics = Mechanic::orderBy('name')->get();
        return view('breakdown.index', [
            'mechanics' => $mechanics,
            'status' => Breakdown::STATUS
        ]);
    }

    public function trucksList(int $mechanicId)
    {
        $trucks = Truck::where('mechanic_id', $mechanicId)->orderBy('maker')->get();
        $html = view('breakdown.trucks_list')->with('trucks', $trucks)->render();
        return response()->json([
            'html' => $html
        ]);
    }

    public function list()
    {
        $breakdowns = Breakdown::orderBy('updated_at', 'desc')->get();
        $html = view('breakdown.list')->with('breakdowns', $breakdowns)->with('status', Breakdown::STATUS)->render();
        return response()->json([
            'html' => $html
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $breakdown = new Breakdown;
        $breakdown->truck_id = (int)$request->truck_id ?? 0;
        $breakdown->title = $request->title;
        $breakdown->notes = $request->notes;
        $breakdown->status = (int)$request->status;
        $breakdown->price = (float)$request->price;
        $breakdown->discount = (float)$request->discount;

        $breakdown->save();

        return response()->json([
            'msg' => 'All good',
            'status' => 'OK'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function modal(Breakdown $breakdown)
    {
        $html = view('breakdown.modal_content')->with('breakdown', $breakdown)->with('status', Breakdown::STATUS)->render();
        return response()->json([
            'html' => $html
        ]);
    }

    public function edit(Breakdown $breakdown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breakdown $breakdown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Breakdown  $breakdown
     * @return \Illuminate\Http\Response
     */
    public function destroy(Breakdown $breakdown)
    {
        $breakdown->delete();
        return response()->json([
            'msg' => 'All good',
            'status' => 'OK',
            'refresh' => 'list'
        ]);
    }
}
