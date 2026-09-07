@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h2>Cadastrar aluno</h2>

    <form method="POST" action="{{ url('/alunos') }}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
