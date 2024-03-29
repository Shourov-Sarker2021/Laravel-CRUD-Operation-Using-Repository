<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Models\School;
use App\Http\Controllers\CityController;
use App\Models\City;
use App\Http\Controllers\StoreController;
use App\Models\Store; 
 
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 
Route::resource('schools', SchoolController::class);
Route::resource('city', CityController::class);
Route::resource('products', StoreController::class);
 
 

 
