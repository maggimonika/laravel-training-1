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

Route::get('/', 'App\Http\Controllers\TodoController@home')->name('home');
 

Route::post('/create','App\Http\Controllers\TodoController@store')->name('store');

Route::get('/edit/{trainingone}', 'App\Http\Controllers\TodoController@edit')->name('edit');

Route::post('/update/{trainingone}','App\Http\Controllers\TodoController@update')->name('update');

Route::post('/delete/{trainingone}','App\Http\Controllers\TodoController@delete')->name('destroy');

Route::get('/about', function () {
    return view('about');
});
