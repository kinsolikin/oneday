<?php

use App\Http\Controllers\ControllerOpini;
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

Route::get('/',[ControllerOpini::class,'index']);
Route::get('/opini',[ControllerOpini::class,'index']);
Route::get('/opini/{post:slug}',[ControllerOpini::class,'singlepost']);

