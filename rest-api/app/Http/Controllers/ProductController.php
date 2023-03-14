<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = Product::all();
        // return response()->json($product);

        $data = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category')
            ->select('products.*', 'categories.category')
            ->orderBy('products.title', 'asc')
            ->get();

        return response()->json($data);
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
    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "price" => "required",
            "category" => "required",
        ]);

        Product::create($data);
        return response()->json('product Created');
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        $data = Product::where('id', $product)->get();
        if ($data) {
            return response()->json($data);
        } else {
            return response()->json('Unidentified');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "price" => "required",
            "category" => "required",
        ]);
        $product->update($data);
        return response()->json("Data Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json("Data Deleted");
    }
}
