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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/pessoas/index', 'PessoasController@index')->name('pessoas.index')->middleware('auth');
Route::get('/pessoas/create', 'PessoasController@create')->name('pessoas.create')->middleware('auth');
Route::post('/pessoas/store', 'PessoasController@store')->name('pessoas.store')->middleware('auth');
Route::get('/pessoas/edit/{id}', 'PessoasController@edit')->name('pessoas.edit')->middleware('auth');
Route::put('/pessoas/update/{id}','PessoasController@update')->name('pessoas.update')->middleware('auth');
Route::get('/pessoas/destroy/{id}', 'PessoasController@destroy')->name('pessoas.destroy')->middleware('auth');

Route::get('/horario/index', 'HorariosController@index')->name('horario.index')->middleware('auth');
Route::get('/horario/create', 'HorariosController@create')->name('horario.create')->middleware('auth');
Route::post('/horario/store', 'HorariosController@store')->name('horario.store')->middleware('auth');
Route::get('/horario/edit/{id}', 'HorariosController@edit')->name('horario.edit')->middleware('auth');
Route::put('/horario/update/{id}', 'HorariosController@update')->name('horario.update')->middleware('auth');
Route::get('/horario/destroy/{id}', 'HorariosController@destroy')->name('horario.destroy')->middleware('auth');

// Route::get('/remedio/index', 'RemediosController@index')->name('remedio.index')->middleware('auth');
// Route::get('/remedio/create', 'RemediosController@create')->name('remedio.create')->middleware('auth');
// Route::post('/remedio/store', 'RemediosController@store')->name('remedio.store')->middleware('auth');

Route::get('/user/create', 'UserController@store')->name('user.create')->middleware('auth');
