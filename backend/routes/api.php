<?php


use Illuminate\Support\Facades\Route;
// routes/api.php

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']); // To fetch products
Route::post('/products', [ProductController::class, 'store']); // To add a new product
