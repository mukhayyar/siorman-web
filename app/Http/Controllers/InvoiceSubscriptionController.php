<?php

namespace App\Http\Controllers;

use App\Models\InvoiceSubscription;
use App\Http\Requests\StoreInvoiceSubscriptionRequest;
use App\Http\Requests\UpdateInvoiceSubscriptionRequest;

class InvoiceSubscriptionController extends Controller
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
     * @param  \App\Http\Requests\StoreInvoiceSubscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvoiceSubscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceSubscription  $invoiceSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceSubscription $invoiceSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceSubscription  $invoiceSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceSubscription $invoiceSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceSubscriptionRequest  $request
     * @param  \App\Models\InvoiceSubscription  $invoiceSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceSubscriptionRequest $request, InvoiceSubscription $invoiceSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceSubscription  $invoiceSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceSubscription $invoiceSubscription)
    {
        //
    }
}
