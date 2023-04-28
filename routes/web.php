<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormValidtionController;

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

Route::get('/brand', function () {
    return view('branding');
});
Route::post('brandSave/{id}', [BrandController::class,'store'])->name('brand.store');
Route::put('url-save/{id}', [BrandController::class,'urlstore'])->name('url.store');
Route::get('/images', [ImageController::class, 'index']);
Route::get('create', [ImageController::class, 'create']);
Route::get('column', [BrandController::class, 'create']);
Route::get('store', [UserController::class, 'store']);
Route::put('url', [UserController::class, 'brandurl'])->name('url');
Route::get('urlform', [UserController::class, 'urlform'])->name('url');
Route::get('/form', [FormValidtionController::class, 'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('validate.form');
Route::post('img/{id}', [UserController::class, 'brandImage'])->name('img');
Route::get('img', [UserController::class, 'Imgform']);
