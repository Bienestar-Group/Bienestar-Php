<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('regional','RegionalController');
Route::get('regional/destroy/{id}',['as' => 'regional/destroy','uses'=>'RegionalController@destroy']);
Route::post('regional/search',['as' => 'regional/search', 'uses'=>'RegionalController@search']);	

Route::resource('concepto','ConceptoController');
Route::get('concepto/destroy/{id}',['as' => 'concepto/destroy','uses'=>'ConceptoController@destroy']);
Route::post('concepto/search',['as' => 'concepto/search', 'uses'=>'ConceptoController@search']);

Route::resource('item','ItemController');
Route::get('item/destroy/{id}',['as' => 'item/destroy','uses'=>'ItemController@destroy']);
Route::post('item/search',['as' => 'item/search', 'uses'=>'ItemController@search']);

Route::resource('evento','EventoController');
Route::get('evento/destroy/{id}',['as' => 'evento/destroy','uses'=>'EventoController@destroy']);
Route::post('evento/search',['as' => 'evento/search', 'uses'=>'EventoController@search']);	

Route::resource('curso','CursoController');
Route::get('curso/destroy/{id}',['as' => 'curso/destroy','uses'=>'CursoController@destroy']);
Route::post('curso/search',['as' => 'curso/search', 'uses'=>'CursoController@search']);	

Route::resource('taller','TallerController');
Route::get('taller/destroy/{id}',['as' => 'taller/destroy','uses'=>'TallerController@destroy']);
Route::post('taller/search',['as' => 'taller/search', 'uses'=>'TallerController@search']);	