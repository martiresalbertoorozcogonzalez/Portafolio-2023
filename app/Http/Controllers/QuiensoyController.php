<?php

namespace App\Http\Controllers;

use App\Models\Quiensoy;
use Illuminate\Http\Request;

class QuiensoyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.quiensoy.index');
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
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function show(Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiensoy $quiensoy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiensoy  $quiensoy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiensoy $quiensoy)
    {
        //
    }
}
