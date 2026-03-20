<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home');
Route::view('/sobre', 'sobre');
Route::view('/promocao', 'promocao');
Route::view('/contato', 'contato');