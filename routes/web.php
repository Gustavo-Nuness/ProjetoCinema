<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/filmes', 'FilmeController@index');

Route::get('/consultar-filmes', function(){

    
});

