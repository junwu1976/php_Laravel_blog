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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/new-categories', 'CategoriesController@create');

Route::post('/store-categories', 'CategoriesController@save');

Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/{category}', 'CategoriesController@show');

Route::get('/categories/{category}/delete', 'CategoriesController@destory');

Route::get('/categories/{category}/edit', 'CategoriesController@edit');

Route::post('/categories/{category}/update-categories', 'CategoriesController@update');


