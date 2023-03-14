<?php

namespace App\Http\Controllers;

use App\Models\Orderdetail;
use App\Http\Requests\StoreOrderdetailRequest;
use App\Http\Requests\UpdateOrderdetailRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrderdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderdetail = Orderdetail::all();
        return response()->json($orderdetail);
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
    public function store(StoreOrderdetailRequest $request)
    {

        $data = $request->validate([
            "idbarang" => "required",
            "jumlah" => "required",
            "harga" => "required",
            "barang" => "required",
            "idpelanggan" => "required",
            "pelanggan" => "required",
            "alamat" => "required",
        ]);

        Orderdetail::create($data);
        return response()->json('Order Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderdetailRequest $request, Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderdetail $orderdetail)
    {
        //
    }
}
