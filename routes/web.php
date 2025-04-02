<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Creando las rutas necesarias.
use App\Http\Controllers\ProductController;

Route::resource(name: 'products', controller: ProductController::class);
