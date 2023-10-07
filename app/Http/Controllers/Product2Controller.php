<?php

namespace App\Http\Controllers;

use App\Models\Product2;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("product2.index");
        return ("Hola, estoy en un index");
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product2 $product2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product2 $product2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product2 $product2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product2 $product2)
    {
        //
    }
}
