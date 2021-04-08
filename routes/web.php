<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\facultycontroller;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\buscontroller;
use App\Http\Controllers\bookcontroller;


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


Route::get('/', [facultycontroller::class,'create']);
Route::get('/student', [studentcontroller::class,'create']);
Route::get('/bus', [buscontroller::class,'create']);
Route::get('/book', [bookcontroller::class,'create']);

Route::post('/facultyread',[facultycontroller::class,'store']);
Route::post('/studentread',[studentcontroller::class,'store']);
Route::post('/busread',[buscontroller::class,'store']);
Route::post('/bookread',[bookcontroller::class,'store']);


