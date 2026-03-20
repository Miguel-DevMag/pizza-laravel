<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.home');
});

Route::view('/home', 'components.home');
Route::view('/sobre', 'components.sobre');
Route::view('/promocao', 'components.promocao');
Route::view('/contato', 'components.contato');