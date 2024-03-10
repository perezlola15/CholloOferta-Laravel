<?php

use App\Http\Controllers\CholloController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CholloController::class, 'index'])->name('chollos.index');
Route::resource('chollos', CholloController::class);

/*
Route::get('/', [CholloController::class, 'index'])->name('chollos.index');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{id}', [CholloController::class, 'show'])->name('chollos.show');
Route::get('/chollos/{id}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{id}', [CholloController::class, 'update'])->name('chollos.update');
Route::delete('/chollos/{id}', [CholloController::class, 'destroy'])->name('chollos.destroy');
*/
