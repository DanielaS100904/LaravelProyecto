<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProveedoreController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\InventarioController;

// Pagina principal
Route::get('/', function () {
    return view('joyeria.index');
});

// Rutas de autenticación (instlacion de Laravel UI/Breeze instalado)
Auth::routes();

// CRUD de proveedores
Route::resource('proveedores', ProveedoreController::class)->middleware('auth');
// CRUD de productos
Route::resource('productos', ProductoController::class)->middleware('auth');
;
// CRUD de proveedores
Route::resource('inventarios', InventarioController::class)->middleware('auth');
;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
