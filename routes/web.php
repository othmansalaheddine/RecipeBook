<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


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
    return view('welcome');
});



Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');
Route::post('/recipe/create', [RecipeController::class, 'store'])->name('recipe.store');
Route::get('/recette/{recipe}/edit', [RecipeController::class ,'edit'])->name('recipe.edit');
Route::delete('/recette/{recipe}/destroy', [RecipeController::class ,'destroy'])->name('recipe.destroy');
Route::put('/recette/{recipe}/update', [RecipeController::class ,'update'])->name('recipe.update');