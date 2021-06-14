<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('pages.index');
});


Route::get('/soma', function () {
    return view('pages.soma');
});

Route::get('/subtrai', function () {
    return view('pages.subtrai');
});

Route::get('calculadora/{operation}/{v1}/{v2}', 'App\Http\Controllers\Calculator\ArithmeticController@calculating')
    ->where('v1', '[0-9]+')
    ->where('v2', '[0-9]+');
