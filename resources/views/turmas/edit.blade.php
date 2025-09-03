@extends('layouts.app')

@section('title', 'Editar Turma')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Turma</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('turmas.update', $turma->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome da Turma</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $turma->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao">{{ old('descricao', $turma->descricao) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="ano" class="form-label">Ano</label>
            <input type="number" class="form-control" id="ano" name="ano" value="{{ old('ano', $turma->ano) }}">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Turma</button>
        <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
