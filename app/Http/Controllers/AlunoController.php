<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return 'Lista de alunos';
    }

    public function show(string $id)
    {
        return "Aluno: {$id}";
    }

    public function create()
    {
        return 'Formulário de cadastro de aluno';
    }

    public function store(Request $request)
    {
        return 'Aluno cadastrado';
    }

    public function edit(string $id)
    {
        return "Editar aluno: {$id}";
    }

    public function update(Request $request, string $id)
    {
        return "Aluno {$id} atualizado";
    }

    public function destroy(string $id)
    {
        return "Aluno {$id} excluído";
    }
}
