<?php

use App\Http\Controllers\NutrientController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CompositionController;
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
    Route::get('/', [UsersController::class, 'index'])->name('users.list');
    Route::get('/view/{id}', [UsersController::class, 'view'])->name('users.view');
    Route::get('/update/{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/delete/{id}', [UsersController::class, 'delete'])->name('users.delete');
    Route::get('/terminate/{id}', [UsersController::class, 'terminate'])->name('users.terminate');
    Route::get('/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/create', [UsersController::class, 'store'])->name('users.store');

});

//nutrients, este jalará id, name, type (donde macro o micro) descripción. 
Route::prefix('/nutrients')-> group(function () {
    Route::get('/', [NutrientController::class, 'index'])->name('nutrients.list');
    Route::get('/view/{id}', [NutrientController::class, 'view'])->name('nutrients.view');
    Route::get('/update/{id}', [NutrientController::class, 'update'])->name('nutrients.update');
    Route::get('/delete/{id}', [NutrientController::class, 'delete'])->name('nutrients.delete');
    Route::get('/terminate/{id}', [NutrientController::class, 'terminate'])->name('nutrients.terminate');
    Route::get('/create', [NutrientController::class, 'create'])->name('nutrients.create');
    Route::post('/create', [NutrientController::class, 'store'])->name('nutrients.store');//es es pal insert además, store de almacenamiento, no de tienda

});

//hay que actualizar el nutrientController por un macroController para estos, hace lo mismo con vitaminas, alimentos
Route::prefix('/composition')-> group(function () {
    Route::get('/', [CompositionController::class, 'index'])->name('composition.list');
    Route::get('/view{id}', [CompositionController::class, 'view'])->name('composition.view');
    Route::get('/update{id}', [CompositionController::class, 'update'])->name('composition.update');
    Route::get('/delete{id}', [CompositionController::class, 'delete'])->name('composition.delete');
    Route::get('/terminate{id}', [CompositionController::class, 'terminate'])->name('composition.terminate');
    Route::get('/create', [CompositionController::class, 'create'])->name('composition.create');
    Route::get('/delete', [CompositionController::class, 'store'])->name('composition.store');

});

Route::prefix('/foods')-> group(function () {
    Route::get('/', [FoodController::class, 'index'])->name('foods.list');
    Route::get('/create', [FoodController::class, 'create'])->name('foods.create'); 
    Route::get('/view/{id}', [FoodController::class, 'view'])->name('foods.view');
    Route::get('/update/{id}', [FoodController::class, 'update'])->name('foods.update');
    Route::get('/delete/{id}', [FoodController::class, 'delete'])->name('foods.delete');
    Route::get('/terminate/{id}', [FoodController::class, 'terminate'])->name('foods.terminate');
    Route::post('/create', [FoodController::class, 'store'])->name('foods.store');
});

Route::prefix('/suplementos')-> group(function () {

    Route::get('/suplementos', [NutrientController::class, 'index'])->name('suplementos');
});