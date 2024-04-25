<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::resource('songs', SongController::class);

// Route::get("/", [SongController::class, 'index'])->name('songs');
// Route::get('create', [SongController::class, 'create']);
// Route::get('songs/{index}', [SongController::class, 'show'])->name('show');
// Route::post('songs/', [SongController::class, 'store'])->name('store');
// Route::post('songs/{index}/edit', [SongController::class, 'edit'])->name('edit');

// //delete is voor het verwijderen van de song
// Route::delete('{index}', [SongController::class, 'destroy'])->name('destroy');
// //put is voor het update van de song
// Route::put('{index}', [SongController::class, 'update'])->name('update');
