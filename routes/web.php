<?php

use App\Http\Controllers\AdventureController;
use App\Http\Controllers\anouarController;
use App\Http\Controllers\destinationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [destinationController::class,'getDestinationsWithImages']);

Route::get('/detail', function () {
    return view('/detail');
})->name('detail');
Route::get('/adventures/{id}', [AdventureController::class, 'getAdventures'])->name('adventures');
// Route::get('/adventures', function () {
//     return view('/adventures');
// })->name('adventures');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





