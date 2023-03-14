<?php

namespace App\Http\Controllers;

use App\Models\Pelanggantoko;
use App\Http\Requests\StorePelanggantokoRequest;
use App\Http\Requests\UpdatePelanggantokoRequest;
use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PelanggantokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggas = Pelanggantoko::all();
        return response()->json($pelanggas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePelanggantokoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelanggantoko $pelanggantoko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelanggantoko $pelanggantoko)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePelanggantokoRequest $request, Pelanggantoko $pelanggantoko)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelanggantoko $pelanggantoko)
    {
        //
    }
}
