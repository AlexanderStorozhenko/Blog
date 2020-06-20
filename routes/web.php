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

Route::group(['prefix' => 'api'], function (){
    Route::post('/editor/article/save',"EditorController@save");
    Route::post('/editor/article/refresh',"EditorController@refresh");
});
Route::group(['prefix' => 'admin'], function (){
    Route::get('/',"AdminController@index");
    Route::get('/login',"AdminController@login")->name("admin.login");
    Route::get('/logout',"AdminController@logout")->name("admin.logout");
    Route::post('/auth',"AdminController@auth");

    Route::middleware("auth")->get('/article/add',"EditorController@add");
    Route::middleware("auth")->get('/article/change/{id}',"EditorController@change");
});

