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

Route::get('/tags', function () {
    return view('tags');
});



Route::get('nodos', 'PagesController@home' );

Route::get('about', 'PagesController@about' );

Route::get('bootstrap', 'PagesController@bootstrap' );




Auth::routes();

Route::resource('datos', 'CardsController');

Route::get('/home', 'HomeController@index');

Route::get('admin', function () {
    return view('admin_template');
});

Route::resource('test', 'CardsController');