<?php

use App\Http\Controllers\NutrientController;
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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('/nutrientes')-> group(function () {

    Route::get('/proteinas', [NutrientController::class, 'index'])->name('Proteinas');
    Route::get('/hc', [NutrientController::class, 'index'])->name('HC');
    Route::get('/lip', [NutrientController::class, 'index'])->name('Lipidos');
});
Route::prefix('/alimentos')-> group(function () {

    Route::get('/gruposAlimentos', [NutrientController::class, 'index'])->name('grupoAlimentos');
    Route::get('/composicionAlimentos', [NutrientController::class, 'index'])->name('composicionAlimentos');
    Route::get('/lip', [NutrientController::class, 'index'])->name('Lipidos');
});
Route::prefix('/suplementos')-> group(function () {

    Route::get('/suplementos', [NutrientController::class, 'index'])->name('suplementos');
});