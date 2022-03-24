<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/codes', [App\Http\Controllers\CodeController::class, 'index']);

Route::get('/codes/create', [App\Http\Controllers\CodeController::class, 'create']);

Route::post('/codes/create', [App\Http\Controllers\CodeController::class, 'createCodes']);

Route::get('/codes/delete', [App\Http\Controllers\CodeController::class, 'delete']);

Route::post('/codes/delete', [App\Http\Controllers\CodeController::class, 'deleteCodes']);

Route::post('/deleteaccount', [App\Http\Controllers\UserController::class, 'deleteAccount']);