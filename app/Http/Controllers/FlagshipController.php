<?php

namespace App\Http\Controllers;

use App\Models\Flagship;
use Illuminate\Http\Request;

class FlagshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.flagship.index',[
            "page" => 'flagship',
            "flag" => Flagship::all()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function show(Flagship $flagship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function edit(Flagship $flagship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flagship $flagship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flagship $flagship)
    {
        //
    }
}
