<?php

use App\Http\Controllers\CholloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CholloController::class, 'index']);

// Ruta para mostrar un formulario de creación de chollo
Route::get('/chollos/create', [CholloController::class, 'create']);

// Ruta para manejar la creación de un nuevo chollo
Route::post('/chollos', [CholloController::class, 'store']);

// Ruta para mostrar un chollo específico
Route::get('/chollos/{id}', [CholloController::class, 'show']);

// Ruta para mostrar un formulario de edición de chollo
Route::get('/chollos/{id}/edit', [CholloController::class, 'edit']);

// Ruta para manejar la actualización de un chollo
Route::put('/chollos/{id}', [CholloController::class, 'update']);

// Ruta para manejar la eliminación de un chollo
Route::delete('/chollos/{id}', [CholloController::class, 'destroy']);

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/chollos', [CholloController::class, 'index'])->name('chollos.index');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{id}', [CholloController::class, 'show'])->name('chollos.show');
Route::get('/chollos/{id}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{id}', [CholloController::class, 'update'])->name('chollos.update');
Route::delete('/chollos/{id}', [CholloController::class, 'destroy'])->name('chollos.destroy');
