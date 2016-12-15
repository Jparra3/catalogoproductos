<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */
/*
TIPOS DE RUTAS
GET, POST, PUT, DELETE
 */

Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/categorias/{name?}', function ($name = "no agregó name") {
    echo "esta es la session de categorias señor: $name";
});*/

Route::get('/cat',[
	'as' => 'name',
	'uses' => 'UserController@index'
	]);

//crear un grupo de rutas
/*Route::group(['prefix' => 'categorias'],function(){
	Route::get('view/{categoria?}',function($categoria = "vacio"){
		echo "$categoria";
	});
});*/

Route::group(['prefix' => 'categorias'],function(){
	Route::get('view/{id}',[
		'uses' => 'TestController@view',
		'as' => 'categoriasView']);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
