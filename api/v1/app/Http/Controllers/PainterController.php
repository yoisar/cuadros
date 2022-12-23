<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePainterRequest;
use App\Http\Requests\UpdatePainterRequest;
use App\Models\Painter;

class PainterController extends Controller
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
     * @param  \App\Http\Requests\StorePainterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePainterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Painter  $painter
     * @return \Illuminate\Http\Response
     */
    public function show(Painter $painter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painter  $painter
     * @return \Illuminate\Http\Response
     */
    public function edit(Painter $painter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePainterRequest  $request
     * @param  \App\Models\Painter  $painter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePainterRequest $request, Painter $painter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painter  $painter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Painter $painter)
    {
        //
    }
}
