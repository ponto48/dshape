<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurements = Measurements::all();

        return view('measurements.list')->with('measurements', $measurements);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //cirando o objeto medidas
        // $measurements = new Measurements();

        // foreach ($request as $key => $value) {
        //     $measurements->$key = $value;
        // }

        // $measurements->save();

        return 'a';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function show(Measurements $measurements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function edit(Measurements $measurements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Measurements $measurements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measurements  $measurements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measurements $measurements)
    {
        //
    }
}
