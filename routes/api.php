<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;

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

Route::post('brandSave/{id}', [BrandController::class,'store'])->name('brand.store');
Route::put('url-save/{id}', [BrandController::class,'urlstore'])->name('url.store');
Route::get('/index', [BrandController::class, 'index']);
Route::put('url', [UserController::class, 'brandurl'])->name('url');
Route::post('img/{id}', [UserController::class, 'brandImage'])->name('img');
