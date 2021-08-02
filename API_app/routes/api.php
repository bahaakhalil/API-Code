<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('products', ProductController::class)->middleware('auth:sanctum');
Route::apiResource('cart', CartController::class)->middleware('auth:sanctum');
Route::get('count', [CartController::class , 'count'])->middleware('auth:sanctum');

Route::post('register', [AuthController::class , "register"]);

Route::post('login', [AuthController::class , "login"]);
Route::get('users', [UserController::class , "index"]);

