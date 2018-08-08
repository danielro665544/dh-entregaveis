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


Route::get('/meuPrimeiroCaminho', function () {
    return view('caminho');
});

Route::get('/resultado/{numero}/{numero2?}', function($numero, $numero2 = null){
    return view('numero')->with('numero', $numero)->with('numero2', $numero2);
});