<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pais', [App\Http\Controllers\PaisController::class, 'index'])->name('pais');
Route::get('/pais/ver/{id}', [App\Http\Controllers\PaisController::class, 'ver']);
Route::get('/pais/crear', [App\Http\Controllers\PaisController::class, 'crear']);
Route::post('/pais/guardar', [App\Http\Controllers\PaisController::class, 'guardar']);
Route::get('/pais/eliminar/{id}', [App\Http\Controllers\PaisController::class, 'eliminar'])->name('pais.eliminar');
Route::get('/pais/actualizar/{id}', [App\Http\Controllers\PaisController::class, 'actualizar'])->name('pais.actualizar');
Route::post('/pais/guardaractualizar', [App\Http\Controllers\PaisController::class, 'guardaractualizar']);




