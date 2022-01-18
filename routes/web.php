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

Route::get('/',[AdminController::class,'beranda']);


Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/tableuser',[AdminController::class,'vtable']);

Route::get('/login',[LoginController::class,'indexlog']);
Route::get('/register',[LoginController::class,'indexregis']);
Route::post('/reg',[LoginController::class,'register']);
Route::post('/log',[LoginController::class,'login']);

Route::get('/tableproject',[AdminController::class,'vtproject']);
Route::get('/pageadd',[AdminController::class,'vaproject']);
Route::get('/pageedit/{id}',[AdminController::class,'veproject']);
Route::post('/updateproject/{id}',[AdminController::class,'updateproject']);
Route::post('/add',[AdminController::class,'addproject']);
Route::get('/detailproject/{id}',[AdminController::class,'detailproject']);






