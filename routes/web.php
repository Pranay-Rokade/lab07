<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [
    HomeController::class, 'index'
]);

Route::get('/articles', [
    ArticlesController::class, 'index'
]);
