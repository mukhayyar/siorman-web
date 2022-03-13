<?php

namespace App\Http\Controllers;

use App\Models\JenisSubscription;
use App\Http\Requests\StoreJenisSubscriptionRequest;
use App\Http\Requests\UpdateJenisSubscriptionRequest;

class JenisSubscriptionController extends Controller
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
     * @param  \App\Http\Requests\StoreJenisSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisSubscription  $jenisSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(JenisSubscription $jenisSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisSubscription  $jenisSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisSubscription $jenisSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisSubscriptionRequest  $request
     * @param  \App\Models\JenisSubscription  $jenisSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisSubscriptionRequest $request, JenisSubscription $jenisSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisSubscription  $jenisSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisSubscription $jenisSubscription)
    {
        //
    }
}
