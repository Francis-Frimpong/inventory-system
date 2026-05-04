<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.products', compact('products'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.addproducts');
        
    }
}
