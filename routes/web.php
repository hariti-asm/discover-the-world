<?php

use App\Http\Controllers\AdventureController;
use App\Http\Controllers\anouarController;
use App\Http\Controllers\destinationController;
use App\Http\Controllers\AddAdventureController;
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
Route::get('/addAdventure', [AddAdventureController::class, 'showAdventureForm'])->name('AddAdventure');
Route::post('/addAdventure', [AdventureController::class, 'saveAdventure'])->name('save');
Route::get('/MyAdventures/{id}', [AdventureController::class, 'getMyAdventures'])->name('MyAdventures');
Route::get('/getDetails/{id}', [AdventureController::class, 'getDetails'])->name('getDetails');

Route::get('/allAdventures', [AdventureController::class, 'allAdventures'])->name('allAdventures');
Route::get('/allAdventuresdate', [AdventureController::class, 'allAdventuresdate'])->name('allAdventuresdate');
Route::get('/dashboard', [destinationController::class,'getDestinationsWithImagess'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





