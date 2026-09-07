<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Página sobre o projeto';
});

Route::resource('alunos', AlunoController::class);

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
