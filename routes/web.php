<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get("songs/", [SongController::class, 'index'])->name('songs');
Route::get('create', [SongController::class, 'create']);
Route::get('songs/{index}', [SongController::class, 'show'])->name('show');
Route::post('songs/', [SongController::class, 'store'])->name('store');
Route::post('songs/{index}/edit', [SongController::class, 'edit'])->name('edit');

//delete is voor het verwijderen van de song
Route::delete('{index}', [SongController::class, 'destroy'])->name('destroy');
//put is voor het update van de song
Route::put('{index}', [SongController::class, 'update'])->name('update');




