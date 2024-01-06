<?php

use App\Http\Controllers\login\LoginController;
use App\Http\Controllers\product\ProductsController;
use App\Http\Controllers\register\RegisterController;
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

Route::get('/products/{id?}', [ProductsController::class, 'getAll']);
Route::get('/products/id/{id}', [ProductsController::class, 'find']);

Route::post('/login', [LoginController::class, 'login']);
Route::post('/register', [RegisterController::class, 'create']);
