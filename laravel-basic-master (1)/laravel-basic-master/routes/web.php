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

Route::get('/posts', 'PostController@index');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::get('/posts/create', 'PostController@create')->name('posts.create');

Route::get('/calculator', 'CalculatorController@getFormCalculator');
Route::post('/calculator', 'CalculatorController@calculate')->name('calc.calculate');
