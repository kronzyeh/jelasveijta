<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealsController;

Route::get('/', function () {
    return view('welcome');
});

// Meals routes
Route::get('/meals', [MealsController::class, 'index'])->name('meals.index');
Route::get('/meals/{id}', [MealsController::class, 'show'])->name('meals.show');
Route::get('/search', [App\Http\Controllers\MealController::class, 'search']);

// Categories routes
// ...

// Tags routes
// ...

// Ingredients routes
// ...
