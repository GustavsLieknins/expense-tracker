<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;

Route::resource('expenses', ExpenseController::class);


Route::resource('categories', CategoryController::class);

Route::get('/', function () {
    return view('welcome');
});
