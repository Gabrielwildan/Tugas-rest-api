<?php

namespace App\Http\Controllers;

use App\Models\Admintoko;
use App\Http\Requests\StoreAdmintokoRequest;
use App\Http\Requests\UpdateAdmintokoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class AdmintokoController extends Controller
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
    public function store(StoreAdmintokoRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admintoko $admintoko): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admintoko $admintoko): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdmintokoRequest $request, Admintoko $admintoko): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admintoko $admintoko): RedirectResponse
    {
        //
    }
}
