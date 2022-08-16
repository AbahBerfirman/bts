<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::name('user')->get('user', [UserController::class, 'index'])->middleware('auth:api');
Route::name('user.create')->post('user', [UserController::class, 'create'])->middleware('auth:api');
Route::name('user.update')->put('user', [UserController::class, 'updatee'])->middleware('auth:api');
Route::name('user.patch')->patch('user', [UserController::class, 'patch'])->middleware('auth:api');
Route::name('user.delete')->delete('user', [UserController::class, 'destroy'])->middleware('auth:api');
Route::name('shopping')->get('shopping', [ShopingController::class, 'index'])->middleware('auth:api');
Route::name('shopping.create')->post('shopping', [ShopingController::class, 'create'])->middleware('auth:api');
Route::name('shopping.update')->put('shopping', [ShopingController::class, 'updatee'])->middleware('auth:api');
Route::name('shopping.patch')->patch('shopping', [ShopingController::class, 'patch'])->middleware('auth:api');
Route::name('shopping.delete')->delete('shopping', [ShopingController::class, 'destroy'])->middleware('auth:api');
