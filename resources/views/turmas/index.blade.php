@extends('layouts.app')

@section('title', 'Lista de Turmas')

@section('content')
<h1>Lista de Turmas</h1>

@if(session('success'))
 <div class="alert alert-success">
    {{ session('success') }}
 </div>
@endif

<a href="{{ route('turmas.create') }}" class="btn btn-success mb-3">Cadastrar Nova Turma</a>

@if($turmas->count())
 <ul class="list-group">
    @foreach($turmas as $turma)
    <li class="list-group-item d-flex justify-content-between align-items-center">
     <div>
    <strong>{{ $turma->nome }}</strong> - {{ $turma->serie }}<br>
     <small>{{ $turma->descricao }}</small>
    </div>
    <div class="btn-group" role="group" aria-label="Ações da Turma">
    <a href="{{ route('turmas.edit', $turma->id) }}" class="btn btn-primary btn-sm">Editar</a>
     <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" style="display:inline;">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta turma?');">Excluir</button>
     </form>
     </div>
    </li>
     @endforeach
 </ul>
@else
 <p>Nenhuma turma cadastrada ainda.</p>
@endif

@endsection
