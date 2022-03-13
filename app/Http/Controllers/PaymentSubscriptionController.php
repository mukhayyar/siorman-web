<?php

namespace App\Http\Controllers;

use App\Models\PaymentSubscription;
use App\Http\Requests\StorePaymentSubscriptionRequest;
use App\Http\Requests\UpdatePaymentSubscriptionRequest;

class PaymentSubscriptionController extends Controller
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
     * @param  \App\Http\Requests\StorePaymentSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentSubscription  $paymentSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentSubscription $paymentSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentSubscription  $paymentSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentSubscription $paymentSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentSubscriptionRequest  $request
     * @param  \App\Models\PaymentSubscription  $paymentSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentSubscriptionRequest $request, PaymentSubscription $paymentSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentSubscription  $paymentSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentSubscription $paymentSubscription)
    {
        //
    }
}
