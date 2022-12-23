<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDimensionRequest;
use App\Http\Requests\UpdateDimensionRequest;
use App\Models\Dimension;

class DimensionController extends Controller
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
     * @param  \App\Http\Requests\StoreDimensionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDimensionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function show(Dimension $dimension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function edit(Dimension $dimension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDimensionRequest  $request
     * @param  \App\Models\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDimensionRequest $request, Dimension $dimension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dimension  $dimension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dimension $dimension)
    {
        //
    }
}
