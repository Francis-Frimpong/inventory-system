<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StockinController;
use App\Http\Controllers\StockoutController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/products', [ProductsController::class, 'index'])->name('products.products');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');

Route::get('/stockin', [StockinController::class, 'index'])->name('stockin');

Route::get('/stockout', [StockoutController::class, 'index'])->name('stockout');
