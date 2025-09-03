@extends('layouts.app')

@section('title', 'Lista de Alunos')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Lista de Alunos</h1>

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('alunos.create') }}" class="btn btn-success mb-3">Cadastrar Novo Aluno</a>

    @if($alunos->count())
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Matrícula</th>
                        <th scope="col">Turma</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno->nome }}</td>
                            <td>{{ $aluno->matricula }}</td>
                            <td>{{ $aluno->turma->nome }}</td>
                            <td>
                                <div class="d-flex flex-row">
                                    <a href="{{ route('alunos.edit', $aluno->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                                    <form action="{{ route('alunos.destroy', $aluno->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este aluno?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
</div>
@endsection
