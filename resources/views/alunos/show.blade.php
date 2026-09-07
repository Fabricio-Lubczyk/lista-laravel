@extends('layouts.app')

@section('title', 'Detalhes do aluno')

@section('content')
    <h2>Detalhes do aluno</h2>

    @if(isset($aluno))
        <p>Nome: {{ $aluno->nome }}</p>
    @else
        <p>Aluno não encontrado.</p>
    @endif
@endsection
