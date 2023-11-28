<?php

use App\Http\Controllers\NutrientController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CompositionController;
use App\Http\Controllers\FoodGroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuplementController;
use App\Http\Controllers\TypeSuplement;
use App\Http\Controllers\TypeSuplementController;

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

/*Route::get('/', function () {
    return view('landing');
});*/

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'landing'])->name('landing');




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
Route::prefix('/compositions')-> group(function () {
    Route::get('/', [CompositionController::class, 'index'])->name('compositions.list');
    Route::get('/create', [CompositionController::class, 'create'])->name('compositions.create');

    Route::get('/view/{id}', [CompositionController::class, 'view'])->name('compositions.view');
    Route::get('/update/{id}', [CompositionController::class, 'update'])->name('compositions.update');
    Route::get('/delete/{id}', [CompositionController::class, 'delete'])->name('compositions.delete');
    Route::get('/terminate/{id}', [CompositionController::class, 'terminate'])->name('compositions.terminate');
    Route::post('/create', [CompositionController::class, 'store'])->name('compositions.store');

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

Route::prefix('/groups')-> group(function () {
    Route::get('/', [FoodGroupController::class, 'index'])->name('groups.list');
    Route::get('/create', [FoodGroupController::class, 'create'])->name('groups.create'); 
    Route::get('/view/{id}', [FoodGroupController::class, 'view'])->name('groups.view');
    Route::get('/update/{id}', [FoodGroupController::class, 'update'])->name('groups.update');
    Route::get('/delete/{id}', [FoodGroupController::class, 'delete'])->name('groups.delete');
    Route::get('/terminate/{id}', [FoodGroupController::class, 'terminate'])->name('groups.terminate');
    Route::post('/create', [FoodGroupController::class, 'store'])->name('groups.store');
});


Route::prefix('/suplements')-> group(function () {

    Route::get('/', [SuplementController::class, 'index'])->name('suplements.list');
    Route::get('/create', [SuplementController::class, 'create'])->name('suplements.create'); 
    Route::get('/view/{id}', [SuplementController::class, 'view'])->name('suplements.view');
    Route::get('/update/{id}', [SuplementController::class, 'update'])->name('suplements.update');
    Route::get('/delete/{id}', [SuplementController::class, 'delete'])->name('suplements.delete');
    Route::get('/terminate/{id}', [SuplementController::class, 'terminate'])->name('suplements.terminate');
    Route::post('/create', [SuplementController::class, 'store'])->name('suplements.store');
});

Route::prefix('/typesuplements')-> group(function () {

    Route::get('/', [TypeSuplementController::class, 'index'])->name('typesuplements.list');
    Route::get('/create', [TypeSuplementController::class, 'create'])->name('typesuplements.create'); 
    Route::get('/view/{id}', [TypeSuplementController::class, 'view'])->name('typesuplements.view');
    Route::get('/update/{id}', [TypeSuplementController::class, 'update'])->name('typesuplements.update');
    Route::get('/delete/{id}', [TypeSuplementController::class, 'delete'])->name('typesuplements.delete');
    Route::get('/terminate/{id}', [TypeSuplementController::class, 'terminate'])->name('typesuplements.terminate');
    Route::post('/create', [TypeSuplementController::class, 'store'])->name('typesuplements.store');
});
