<?php

use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\SeedlistsController;
use App\Http\Controllers\PlantsController;
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

Route::get('/show_seedlist/{id}', [SeedlistsController::class, 'show_seedlist']);
Route::get('/show_plant/{id}', [PlantsController::class, 'show_plant']);

Route::resource('introduction', IntroductionController::class)
->only(['index', 'store']);

Route::resource('plants', PlantsController::class)
->only(['index', 'store', 'add']);

Route::post('/add_plant', [PlantsController::class, 'add'])
->name('plants.add');;

Route::resource('seedlists', SeedlistsController::class)
    ->only(['index', 'store']);
