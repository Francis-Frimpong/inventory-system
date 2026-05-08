<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reports = DB::table('products')

        ->leftJoin('stock_ins', 'products.id', '=', 'stock_ins.product_id')

        ->leftJoin('stock_outs', 'products.id', '=', 'stock_outs.product_id')

        ->select(
            'products.name',

            DB::raw('COALESCE(SUM(stock_ins.quantity), 0) as total_stock_in'),

            DB::raw('COALESCE(SUM(stock_outs.quantity), 0) as total_stock_out'),

            DB::raw('products.quantity as current_stock')
        )

        ->groupBy('products.id', 'products.name', 'products.quantity')

        ->get();

        return view('reports', compact('reports'));
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
