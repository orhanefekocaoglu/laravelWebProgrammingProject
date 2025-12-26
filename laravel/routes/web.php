<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/contact", [PagesController::class, "contact"]);

Route::resource('customers', CustomerController::class);
Route::resource('meals', MealController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('activities', ActivityController::class);
Route::resource('foods', FoodController::class);