<?php

namespace App\Http\Controllers;

use App\Models\UserPendidikan;
use App\Http\Requests\StoreUserPendidikanRequest;
use App\Http\Requests\UpdateUserPendidikanRequest;

class UserPendidikanController extends Controller
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
     * @param  \App\Http\Requests\StoreUserPendidikanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserPendidikanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPendidikan  $userPendidikan
     * @return \Illuminate\Http\Response
     */
    public function show(UserPendidikan $userPendidikan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserPendidikan  $userPendidikan
     * @return \Illuminate\Http\Response
     */
    public function edit(UserPendidikan $userPendidikan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserPendidikanRequest  $request
     * @param  \App\Models\UserPendidikan  $userPendidikan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserPendidikanRequest $request, UserPendidikan $userPendidikan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserPendidikan  $userPendidikan
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPendidikan $userPendidikan)
    {
        //
    }
}
