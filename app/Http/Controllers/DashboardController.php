<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockIn;
use App\Models\StockOut;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalProduct = Product::count('name');

        $totalStockIn = StockIn::sum('quantity');

        $totalStockOut = StockOut::sum('quantity');

        $lowStockProducts = Product::query()->where('quantity', '<', 5)->count();

        // using joins to create recent transaction

        $stockIn = DB::table('stock_ins')
            ->join('products', 'stock_ins.product_id', '=', 'products.id')
            ->select(
                'products.name',
                DB::raw("'Stock In' as type"),
                'stock_ins.quantity',
                'stock_ins.date'
            );

        $recentTransactions = DB::table('stock_outs')
            ->join('products', 'stock_outs.product_id', '=', 'products.id')
            ->select(
                'products.name',
                DB::raw("'Stock Out' as type"),
                'stock_outs.quantity',
                'stock_outs.date'
            )
            ->unionAll($stockIn)
            ->orderBy('date', 'desc')
            ->limit(5)
            ->get();

        

        return view('dashboard', compact(
            'totalProduct',
            'totalStockIn',
            'totalStockOut',
            'lowStockProducts',
            'recentTransactions'

        ));
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
