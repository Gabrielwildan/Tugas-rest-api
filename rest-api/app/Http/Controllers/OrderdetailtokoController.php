<?php

namespace App\Http\Controllers;

use App\Models\Orderdetailtoko;
use App\Http\Requests\StoreOrderdetailtokoRequest;
use App\Http\Requests\UpdateOrderdetailtokoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrderdetailtokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderdetailtokoRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderdetailtoko $orderdetailtoko): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orderdetailtoko $orderdetailtoko): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderdetailtokoRequest $request, Orderdetailtoko $orderdetailtoko): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderdetailtoko $orderdetailtoko): RedirectResponse
    {
        //
    }
}
