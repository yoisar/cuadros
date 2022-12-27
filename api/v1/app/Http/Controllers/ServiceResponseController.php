<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServiceResponseRequest;
use App\Http\Requests\UpdateServiceResponseRequest;
use App\Models\ServiceResponse;

class ServiceResponseController extends Controller
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
     * @param  \App\Http\Requests\StoreServiceResponseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceResponseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceResponse  $serviceResponse
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceResponse $serviceResponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceResponse  $serviceResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceResponse $serviceResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceResponseRequest  $request
     * @param  \App\Models\ServiceResponse  $serviceResponse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceResponseRequest $request, ServiceResponse $serviceResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceResponse  $serviceResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceResponse $serviceResponse)
    {
        //
    }
}
