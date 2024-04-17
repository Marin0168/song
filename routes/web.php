<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;


Route::get("/", [SongController::class, 'index']);
Route::get('/create', [SongController::class, 'create']);
Route::get('/{index}/edit', [SongController::class, 'edit']);
Route::get('/{index}', [SongController::class, 'show'])->name('show');
