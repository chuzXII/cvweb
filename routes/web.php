<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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
    return view('beranda');
});

Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/table',[AdminController::class,'vtable']);
Route::get('/login',[LoginController::class,'indexlog']);
Route::get('/register',[LoginController::class,'indexregis']);
Route::post('/reg',[LoginController::class,'register']);
Route::post('/log',[LoginController::class,'login']);



