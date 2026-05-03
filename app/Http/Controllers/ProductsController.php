<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.products');
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.addproducts');
        
    }
}
