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
/*
rutas
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('dashboard', 'PagesController@bootstrap' );

Route::resource('datos', 'CardsController');

Auth::routes();











Route::get('/home', 'HomeController@index');






Route::get('cuestionario', 'CardsController@cuestionario');


Route::get('/', 'searchcontroller@search');
Route::get('/', 'searchcontroller@aets');