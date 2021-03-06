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

Route::get('/', 'App\Http\Controllers\CovidController@index');

Route::get('covid', 'App\Http\Controllers\CovidController@index');
Route::get('country', 'App\Http\Controllers\CovidController@country');
Route::get('allcountry', 'App\Http\Controllers\CovidController@create');



Route::get('chart', function () {
    return view('chart');
});


Route::get('animation', function () {
    return view('animation');
});