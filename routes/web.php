<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Esta línea crea las 7 rutas de productos automáticamente
Route::resource('products', 'ProductController');