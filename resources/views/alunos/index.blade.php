@extends('layouts.app')

@section('title', 'Alunos')

@section('content')
    <h2>Alunos</h2>

    @if(count($alunos ?? []) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome ?? 'Aluno sem nome' }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado.</p>
    @endif
@endsection
