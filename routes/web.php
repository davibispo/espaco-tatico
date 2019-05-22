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
    return view('site.index');
});

Route::get('site/adm','SiteController@adm')->name('site.adm');
Route::resource('site', 'SiteController');
Route::resource('resultados', 'ResultadoController');
Route::resource('contatos', 'ContatoController');
Route::resource('calendario', 'CalendarioController');
Route::resource('user', 'UserController');
Route::resource('cadastros', 'CadastroController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
