<?php

namespace App\Http\Controllers;

use App\Models\Cancione;
use Illuminate\Http\Request;

class CancioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cancionesdatos=Cancione::select('canciones.id')->join('canciones','canciones.id',);
        return view('canciones.show',['canciones'=>$cancionesdatos]);
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
     * @param  \App\Models\Cancione  $cancione
     * @return \Illuminate\Http\Response
     */
    public function show(Cancione $cancione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancione  $cancione
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancione $cancione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancione  $cancione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancione $cancione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancione  $cancione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancione $cancione)
    {
        //
    }
}
