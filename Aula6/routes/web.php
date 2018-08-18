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

Route::get('/genre/{id}', 'GenreController@show');

Route::get('/adicionarFilme', 'FilmesController@formadicionar');
Route::post('/adicionarFilme', 'FilmesController@adicionar');

//Último exercicio mostrar os atores de cada filme

Route::get('/filmesComAtores', 'FilmesController@filmesComAtores');
