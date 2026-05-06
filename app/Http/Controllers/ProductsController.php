<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products', compact('products'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('addproducts', compact('categories'));
        
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'sku' => 'required',
            'category_id' => 'required|exists:categories,id',
            'cost_price' =>'required|numeric|min:0',
            'selling_price' =>'required|numeric|min:0',
        ]);

        Product::create($request->all());

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
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return view('updateproduct', compact('categories', 'product'));
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $request->validate([
            'name' => 'required|min:3',
            'sku' => 'required',
            'category_id' => 'required|exists:categories,id',
            'cost_price' =>'required|numeric|min:0',
            'selling_price' =>'required|numeric|min:0',
        ]);
            $product = Product::findOrFail($id);   // ✅ find existing

            $product->update($request->all());    

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
