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
    return view('job');
});

Route::group(['prefix' => 'articles'], function (){
   Route::get('/',"ArticleController@index");
    Route::get('/{id}',"ArticleController@article");
});


Route::group(['prefix' => 'admin'], function (){
    Route::get('/',"AdminController@index");
    Route::get('/login',"AdminController@login");
    Route::post('/auth',"AdminController@auth");
});

