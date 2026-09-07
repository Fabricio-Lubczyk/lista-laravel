<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        $cursos = Curso::all();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        $aluno = Aluno::create($request->only(['nome', 'email', 'curso_id']));

        return redirect()->route('alunos.show', $aluno);
    }

    public function edit(Aluno $aluno)
    {
        return view('alunos.show', compact('aluno'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        $aluno->update($request->only(['nome', 'email', 'curso_id']));

        return redirect()->route('alunos.show', $aluno);
    }

    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
