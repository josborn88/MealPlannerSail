<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;

//prefix is api
Route::get('/meals', [MealController::class, 'getAllMeals']);

Route::get('meal/{id}', [MealController::class, 'getMealById']);

Route::get('meal/name/{name}', [MealController::class, 'getMealByName']);
