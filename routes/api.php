<?php

use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\OrderController;
use App\Http\Controllers\API\V1\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('products' , [ProductController::class , 'index']);
//Route::post('/admin/access' , [\App\Http\Controllers\API\AccessTokenController::class , 'store']);
Route::apiResource('products' , ProductController::class);
Route::apiResource('categories' , CategoryController::class);
Route::apiResource('orders' , OrderController::class);
