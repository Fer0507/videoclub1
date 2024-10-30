<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;

// Rutas de autenticación
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
// Proteger rutas del catálogo
Route::middleware('auth')->group(function () {
    Route::get('/catalog', [CatalogController::class, 'getIndex']);
    Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
    Route::get('/catalog/create', [CatalogController::class, 'getCreate']);
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'getEdit']);
    Route::post('/catalog/create', [CatalogController::class, 'postCreate']);
    Route::put('/catalog/edit/{id}', [CatalogController::class, 'putEdit']);
});
