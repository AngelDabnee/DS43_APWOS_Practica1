<?php

use App\Http\Controllers\NutrientController;
use App\Http\Controllers\UsersController;
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

//usuarios, con el controlador de usuario. 
Route::prefix('/users')-> group(function () {
    Route::get('', [UsersController::class, 'index'])->name('users.view');
    Route::get('/view/{id}', [UsersController::class, 'view'])->name('users.view');
    Route::get('/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');
    Route::get('/terminate/{id}', [UsersController::class, 'terminate'])->name('users.terminate');
    Route::get('/create', [UsersController::class, 'create'])->name('users.create');
});

//nutrients, este jalará id, name, type (donde macro o micro) descripción. 
Route::prefix('/nutrients')-> group(function () {
    Route::get('', [NutrientController::class, 'index'])->name('nutrients.view');
    Route::get('/view/{id}', [NutrientController::class, 'view'])->name('nutrients.view');
    Route::get('/update/{id}', [NutrientController::class, 'update'])->name('nutrients.update');
    Route::get('/delete/{id}', [NutrientController::class, 'delete'])->name('nutrients.delete');
    Route::get('/terminate/{id}', [NutrientController::class, 'terminate'])->name('nutrients.terminate');
    Route::get('/create', [NutrientController::class, 'create'])->name('nutrients.create');
});

//hay que actualizar el nutrientController por un macroController para estos, hace lo mismo con vitaminas, alimentos
Route::prefix('/macro')-> group(function () {

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