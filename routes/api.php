<?php

use App\Http\Controllers\API\V1\AccessTokenController;
use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\OrderController;
use App\Http\Controllers\API\V1\ProductController;
use App\Http\Controllers\API\V1\RegisterController;
use App\Http\Controllers\API\V1\ReviewController;
use App\Http\Controllers\API\V1\ShoppingCartController;
use App\Http\Controllers\API\V1\UserController;
use App\Models\Review;
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

Route::apiResource('products' , ProductController::class);
Route::apiResource('categories' , CategoryController::class);
Route::apiResource('orders' , OrderController::class);
Route::post('auth/login' , [AccessTokenController::class , 'store'])
    ->middleware('guest:sanctum')->name('login');
Route::post('auth/register', [RegisterController::class, 'store']);
Route::apiResource('users' , UserController::class);
Route::apiResource('reviews' , ReviewController::class)->middleware('auth:sanctum');
Route::apiResource('cart' , ShoppingCartController::class)->middleware('auth:sanctum');
Route::apiResource('shipping-information' , ShoppingCartController::class);

