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

Route::get('/produto/{id}', function (string $id) {
    return "Produto: {$id}";
});

Route::get('/categoria/{id}', function (string $id) {
    return "Categoria: {$id}";
});

Route::get('/usuario/{id}', function (string $id) {
    return "Usuário: {$id}";
});
