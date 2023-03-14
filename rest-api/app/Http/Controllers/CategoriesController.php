<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return response()->json($categories);
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
            "category" => "required",
        ]);

        Categories::create($data);
        return response()->json("Category Created");
    }

    /**
     * Display the specified resource.
     */
    public function show($categories)
    {
        $data = Categories::where('id', $categories)->get();
        if ($data) {
            return response()->json($data);
        } else {
            return response()->json('Unidentified');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories, $category)
    {
        $data = $request->validate([
            "category" => "required",
        ]);

        $cats = Categories::where('id', $category)->update($request->all());
        if ($cats) {
            return response()->json([
                'Data Updated'
            ]);
        } else {
            return response()->json([
                'Failed'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories, $category)
    {
        $cats = Categories::where('id', $category)->delete();

        if ($cats) {
            return response()->json([
                'Data Has Been Deleted'
            ]);
        } else {
            return response()->json([
                'Failed'
            ]);
        }
    }
}
