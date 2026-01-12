<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// dev : http://localhost:8000/api/products
Route::get('/products', [App\Http\Controllers\Api\ProductController::class, 'index']);

// dev : http://localhost:8000/api/weather
Route::get('/weather', [App\Http\Controllers\Api\WeatherController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) { // redirect to /login
    return $request->user();
});
