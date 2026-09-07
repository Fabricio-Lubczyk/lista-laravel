@extends('layouts.app')

@section('title', 'Cadastrar aluno')

@section('content')
    <h2>Cadastrar aluno</h2>

    <form method="POST" action="{{ url('/alunos') }}">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

        <label for="curso">Curso</label>
        <input type="text" id="curso" name="curso" value="{{ old('curso') }}" required>

        <button type="submit">Cadastrar</button>
    </form>
@endsection
