<?php

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
Route::prefix('new')->group(function(){
    Route::get('/first','AdminController@first');
    Route::get('/main','AdminController@main');
    Route::get('/create','AdminController@create');
    Route::post('/store','AdminController@store');
    Route::get('/index','AdminController@index');
    Route::get('/destroy/{id}','AdminController@destroy');
    Route::get('/edit/{id}','AdminController@edit');
    Route::post('/update/{id}','AdminController@update');
    Route::get('/head','AdminController@head');
    Route::get('/left','AdminController@left');
});



