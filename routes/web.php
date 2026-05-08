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

    Route::get('/edit/{id}', 'edit')->name('edit');

    Route::patch('/{id}', 'update')->name('update');

    Route::delete('/{id}', 'destroy')->name('destroy');
});

// Categories routes (Grouped)
Route::prefix('categories')
->name('categories.')
->controller(CategoriesController::class)
->group(function () {
    Route::get('/', 'index')->name('index');
    
    Route::post('/',  'store')->name('store');

});

// stockin routes (Grouped)
Route::prefix('stockin')
->name('stockin.')
->controller(StockinController::class)
->group(function () {
    Route::get('/',  'create')->name('create');
    Route::post('/',  'store')->name('store');

});

// Stockout routes (Grouped)
Route::prefix('stockout')
->name('stockout.')
->controller(StockoutController::class)
->group(function () {
    Route::get('/',  'create')->name('create');
    Route::post('/',  'store')->name('store');

});

Route::get('/report', [ReportController::class, 'index'])->name('reports');
