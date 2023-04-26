<?php

namespace App\Http\Controllers;

use App\Models\Deportes;
use Illuminate\Http\Request;

class DeportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('deportes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('deportes.create');
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
     * @param  \App\Models\Deportes  $deportes
     * @return \Illuminate\Http\Response
     */
    public function show(Deportes $deportes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deportes  $deportes
     * @return \Illuminate\Http\Response
     */
    public function edit(Deportes $deportes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deportes  $deportes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deportes $deportes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deportes  $deportes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deportes $deportes)
    {
        //
    }
}
