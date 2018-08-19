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


//Exercicio 1 - Paginação

Route::get('/paginacao/{regsitroporpagina}', 'ActorController@mostrar');


// Coleção - 1 A
Route::get('/1A', 'ActorController@ratingMaior7');

// Coleção - 1 B
Route::get('/1B', 'ActorController@filmesDeTerror');

// Coleção - 2 A
Route::get('/2A', 'MoviesController@orderByName');

// Coleção - 2 B
Route::get('/2B', 'MoviesController@orderByLength');

// Coleção - 2 C
Route::get('/2C', 'MoviesController@aleatorio');

// Coleção - 2 D
Route::get('/2D', 'MoviesController@maisde90');

// Coleção - 2 E
Route::get('/2E', 'MoviesController@Maisde90rating5');





