<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlunoRequest;
use App\Models\Aluno;
use App\Models\Curso;
use Illuminate\Support\Facades\Gate;

class AlunoController extends Controller
{
    public function index()
    {
        Gate::authorize('viewAny', Aluno::class);
        $alunos = Aluno::all();

        return view('alunos.index', compact('alunos'));
    }

    public function show(Aluno $aluno)
    {
        Gate::authorize('view', $aluno);
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        Gate::authorize('create', Aluno::class);
        $cursos = Curso::all();

        return view('alunos.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Gate::authorize('create', Aluno::class);
        $aluno = Aluno::create($request->only(['nome', 'email', 'curso_id']));

        return redirect()->route('alunos.show', $aluno);
    }

    public function edit(Aluno $aluno)
    {
        Gate::authorize('update', $aluno);
        return view('alunos.show', compact('aluno'));
    }

    public function update(AlunoRequest $request, Aluno $aluno)
    {
        Gate::authorize('update', $aluno);
        $aluno->update($request->only(['nome', 'email', 'curso_id']));

        return redirect()->route('alunos.show', $aluno);
    }

    public function destroy(Aluno $aluno)
    {
        Gate::authorize('delete', $aluno);
        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
