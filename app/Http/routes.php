<?php

Route::group(['prefix' => 'party'], function() {
	Route::get('/', ['as' => 'index', 'uses' => 'PartyController@index']);
	Route::get('/novo', ['as' => 'novo', 'uses' => 'PartyController@create']);
	Route::post('/salvar', ['as' => 'salvar', 'uses' => 'PartyController@store']);
	Route::get('/edita/{id}', ['as' => 'edita', 'uses' => 'PartyController@edit']);
	Route::post('/atualiza/{id}', ['as' => 'atualiza', 'uses' => 'PartyController@update']);
	Route::get('/remove/{id}', ['as' => 'remove', 'uses' => 'PartyController@destroy']);


});


Route::group(['middleware' => 'web'], function () {
	Route::auth();

	Route::get('/home', 'HomeController@index');
    
    Route::get('/', function () {
    	return view('welcome');
	});

});

//Route::get('/party', ['middleware' => 'auth', 'HomeController@show']);

/*
Route::group(['middleware' => 'web'], function () {
	Route::auth();

	Route::get('/home', 'HomeController@index');

	Route::get('/teste', function () {
		return 'Está logado!';
	})->middleware('auth');

});
*/