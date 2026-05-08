<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockIn;
use Illuminate\Support\Facades\DB;



class StockinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
        
        /**
         * Show the form for creating a new resource.
        */
        public function create()
        {
            $products = Product::all();

            return view('stockin', compact('products'));
    
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:0',
            'purchase_price' => 'required|numeric|min:0',
            'supplier' => 'required|min:3'
        ]);

        DB::transaction(function () use ($request) {

        StockIn::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'purchase_price' => $request->purchase_price,
            'supplier' => $request->supplier,
        ]);

        $product = Product::findOrFail($request->product_id);

        $product->increment('quantity', $request->quantity);

    });

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
