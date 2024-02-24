<?php

use App\Http\Controllers\BabyController;
use App\Http\Controllers\BeautyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::prefix('/category')->group(function(){
    Route::get('/', [Controller::class, 'index']);
    Route::get('/food-beverage', [FoodController::class, 'index']);
    Route::get('/beauty-health', [BeautyController::class, 'index']);
    Route::get('/home-care', [HomeController::class, 'index']);
    Route::get('/baby-kid', [BabyController::class, 'index']);

});

Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);
