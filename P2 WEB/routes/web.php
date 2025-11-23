<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return redirect('/productos');
});

Route::get('/productos', [ProductoController::class, 'index']);
