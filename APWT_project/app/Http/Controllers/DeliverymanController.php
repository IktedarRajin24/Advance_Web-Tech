<?php

namespace App\Http\Controllers;

use App\Models\deliveryman;
use App\Http\Requests\StoredeliverymanRequest;
use App\Http\Requests\UpdatedeliverymanRequest;

class DeliverymanController extends Controller
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
     * @param  \App\Http\Requests\StoredeliverymanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredeliverymanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function show(deliveryman $deliveryman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function edit(deliveryman $deliveryman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedeliverymanRequest  $request
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedeliverymanRequest $request, deliveryman $deliveryman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\deliveryman  $deliveryman
     * @return \Illuminate\Http\Response
     */
    public function destroy(deliveryman $deliveryman)
    {
        //
    }
}
