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
    return "Hello world";//view('welcome');
});

Route::get('/login','UserController@login');

Route::get('/login/executive','UserController@executive');

/** Routes Administrator */
Route::get('/users','UserController@index');

// Prioridad
Route::get('/users/new',function(){
    return "Crear nuevo usuario";
});

// Usuario [0-9]
Route::get('/users/{id}','UserController@show')
->where('id','[0-9]+') // Condicion y expreson regular (Solo números y Más de un numero O \w+ (Letras y Numeros)
;

Route::get('/saludo/{name}/{nickname?}','WelcomeUserController');


