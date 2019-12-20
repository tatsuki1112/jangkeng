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
    return view('jangkenTop');
});

Route::get('/inspect', function (){
    return view('inspection');
});

Route::get('/judge', function () {
    return view('judge');
});

Route::post('/inspect', 'ResultsController@setResults');
