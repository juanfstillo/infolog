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

Route::get("index", 'newsController@newsforhome');
Route::get('/noticias', 'newsController@allnews');
Route::get('/laempresa', function(){return view ('/laempresa');});
Route::get('/nuestrocliente', function(){return view ('/nuestrocliente');});
Route::get('/tablero', 'newsController@allnewstablero');
Route::get('/delete_new/{id_new}', 'newsController@deleteNew');
Route::view('add_new', 'add_new');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
