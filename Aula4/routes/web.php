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



// Rotas para Filmes

Route::post('/', 'FilmesController@adicionarFilme');
Route::get('/', 'FilmesController@formulario');

//Rotas para Atores
Route::get('/actors/add', 'ActorsController@formadicionar');
Route::post('/actors/add', 'ActorsController@adicionar');
Route::get('/actor/form_edit/{id}', 'ActorsController@edit');
Route::post('/actor/edit/', 'ActorsController@update');
Route::get('/actor/delete/{id}', 'ActorsController@delete');