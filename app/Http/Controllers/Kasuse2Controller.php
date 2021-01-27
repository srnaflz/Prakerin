<?php

namespace App\Http\Controllers;

use App\Models\Kasuse2;
use Illuminate\Http\Request;

class Kasuse2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
     * @param  \App\Models\Kasuse2  $kasuse2
     * @return \Illuminate\Http\Response
     */
    public function show(Kasuse2 $kasuse2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasuse2  $kasuse2
     * @return \Illuminate\Http\Response
     */
    public function edit(Kasuse2 $kasuse2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasuse2  $kasuse2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kasuse2 $kasuse2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasuse2  $kasuse2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kasuse2 $kasuse2)
    {
        //
    }
}
