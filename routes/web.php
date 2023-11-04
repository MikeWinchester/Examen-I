<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.inicio');
Route::get('/directorio/entradas/agregar', [DirectorioController::class, 'add'])->name('directorio.agregar');
Route::get('/directorio/entradas/buscar', [DirectorioController::class, 'search'])->name('directorio.buscar');
Route::get('/directorio/entradas/{id}/eliminar', [DirectorioController::class, 'delete'])->name('directorio.eliminar');
Route::post('/directorio/entradas/guardar', [DirectorioController::class, 'save'])->name('directorio.guardar');
Route::post('/directorio/entradas/encontrar', [DirectorioController::class, 'find'])->name('directorio.encontrar');
Route::delete('/directorio/entradas/{id}/destruir', [DirectorioController::class, 'destroy'])->name('directorio.destruir');

Route::get('/directorio/contactos', [ContactoController::class, 'index'])->name('contacto.inicio');
Route::get('/directorio/contactos/agregar', [ContactoController::class, 'add'])->name('contacto.agregar');
Route::post('/directorio/contactos/guardar', [ContactoController::class, 'save'])->name('contacto.guardar');
Route::delete('/directorio/contactos/{id}/destruir', [ContactoController::class, 'destroy'])->name('contacto.destruir');