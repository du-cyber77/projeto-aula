@extends('layouts.app')

@section('title', 'Cadastrar Turma')

@section('content')
<h1>Cadastrar Turma</h1>

<form action="{{ route('turmas.index') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Turma</label>
        <input type="text" class="form-control" id="nome" name="nome" maxlength="100" required>
    </div>

    <div class="mb-3">
        <label for="ano" class="form-label">Ano</label>
        <input type="number" class="form-control" id="ano" name="ano" min="1900" max="2100">
    </div>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection
