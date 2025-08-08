<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/products', fn() => Product::all());
Route::post('/sales', function () {
    // handle sale creation
});
