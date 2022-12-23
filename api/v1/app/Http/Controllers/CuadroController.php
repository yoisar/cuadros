<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuadroRequest;
use App\Http\Requests\UpdateCuadroRequest;
use App\Models\Cuadro;

class CuadroController extends Controller
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
     * @param  \App\Http\Requests\StoreCuadroRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuadroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuadro  $cuadro
     * @return \Illuminate\Http\Response
     */
    public function show(Cuadro $cuadro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuadro  $cuadro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuadro $cuadro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuadroRequest  $request
     * @param  \App\Models\Cuadro  $cuadro
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuadroRequest $request, Cuadro $cuadro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuadro  $cuadro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuadro $cuadro)
    {
        //
    }
}
