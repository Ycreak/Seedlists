<?php

use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\SeedlistsController;
use App\Http\Controllers\PlantsController;
use App\Http\Controllers\ProfileController;
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
    return view('introduction.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/show_seedlist/{id}', [SeedlistsController::class, 'show_seedlist']);
Route::get('/show_plant/{id}', [PlantsController::class, 'show_plant']);


Route::resource('introduction', IntroductionController::class)
->only(['index', 'store']);
// ->middleware(['auth', 'verified']);

Route::resource('plants', PlantsController::class)
->only(['index', 'store', 'add']);
// ->middleware(['auth', 'verified']);

Route::post('/add_plant', [PlantsController::class, 'add'])
->name('plants.add');;

Route::resource('seedlists', SeedlistsController::class)
    ->only(['index', 'store']);
    // ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
