<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockOut;
use Illuminate\Support\Facades\DB;


class StockoutController extends Controller
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

        return view('stockout', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    

    public function store(Request $request)
    {
        
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'selling_price' => 'required|numeric|min:0',
        ]);

        try {

            DB::transaction(function () use ($request) {
                $product = Product::findOrFail($request->product_id);
                

                // Prevent negative stock
                if ($product->quantity < $request->quantity) {

                    throw new \Exception('Not enough stock available.');

                }

                // 1. Create stock out record
                StockOut::create([
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'selling_price' => $request->selling_price,
                ]);

                // 2. Reduce product quantity
                $product->decrement('quantity', $request->quantity);

            });

            return redirect()
                ->route('products.index')
                ->with('success', 'Stock out recorded successfully.');

        } catch (\Exception $e) {

            return back()
                ->with('error', $e->getMessage());

        }
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
