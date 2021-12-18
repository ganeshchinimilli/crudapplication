<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Companies;
use App\Http\Controllers\mycontroller;
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

Route::get('/form',[Companies::class,'from']);
Route::post('submitee',[Companies::class,'save']);
Route::get('main',[Companies::class,'show']);
Route::get('/edit/{id}',[Companies::class,'showdata']);

Route::post('edit',[Companies::class,'update']);

Route::get('delete/{id}',[Companies::class,'delete']);

