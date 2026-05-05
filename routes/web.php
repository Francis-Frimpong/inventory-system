<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StockinController;
use App\Http\Controllers\StockoutController;
use Illuminate\Support\Facades\Route;

// Dashboard route (Standalone)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Product routes (Grouped)
Route::prefix('products')
->name('products.')
->controller(ProductsController::class)
->group(function (){

    Route::get('/',  'index')->name('index');
    
    Route::get('/create',  'create')->name('create');
    
    Route::post('/',  'store')->name('store');
});

// Categories routes (Grouped)
Route::prefix('categories')
->name('categories.')
->controller(CategoriesController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    
    Route::post('/',  'store')->name('store');

});


Route::get('/stockin', [StockinController::class, 'index'])->name('stockin');

Route::get('/stockout', [StockoutController::class, 'index'])->name('stockout');

Route::get('/report', [ReportController::class, 'index'])->name('reports');
