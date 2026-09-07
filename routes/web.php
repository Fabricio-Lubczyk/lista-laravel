<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página sobre o projeto';
});

Route::get('/alunos', function () {
    return 'Lista de alunos';
});

Route::get('/contato', function () {
    return 'Entre em contato conosco';
});
