<?php

namespace App\Http\Controllers;

use App\Models\Ordertoko;
use App\Http\Requests\StoreOrdertokoRequest;
use App\Http\Requests\UpdateOrdertokoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrdertokoController extends Controller
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
    public function store(StoreOrdertokoRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordertoko $ordertoko): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordertoko $ordertoko): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdertokoRequest $request, Ordertoko $ordertoko): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordertoko $ordertoko): RedirectResponse
    {
        //
    }
}
