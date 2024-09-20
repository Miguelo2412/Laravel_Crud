<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ArlController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

// Rutas de PruebaController
Route::get('/home', [PruebaController::class, 'home']);
Route::get('/mision', [PruebaController::class, 'mision']);
Route::get('/vision', [PruebaController::class, 'vision']);
Route::get('/quienes-somos', [PruebaController::class, 'quienesSomos']);

// Rutas para Producto y Proveedores
Route::resource('productos', ProductoController::class);
Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/create', [ProveedorController::class, 'create']);
Route::post('/proveedores', [ProveedorController::class, 'store']);
Route::get('/proveedores/{id}/edit', [ProveedorController::class, 'edit']);
Route::put('/proveedores/{id}', [ProveedorController::class, 'update']);
Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy']);

// Rutas RESTful para Empleados, ARL y Usuarios
Route::resource('empleados', EmpleadoController::class);
Route::resource('arls', ArlController::class);
Route::resource('usuarios', UsuarioController::class);
