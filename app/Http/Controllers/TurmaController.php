<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    // Mostrar a lista de turmas
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }

    // Mostrar o formulário para cadastrar nova turma
    public function create()
    {
        return view('turmas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'ano' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        // Se 'professor' não está no banco, remova do request
        $dados = $request->only(['nome', 'descricao', 'ano']);

        Turma::create($dados);

        return redirect()->route('turmas.index')->with('success', 'Turma cadastrada com sucesso!');
    }

    public function destroy(Turma $turma)
    {
        // Usamos forceDelete() para remover a turma permanentemente do banco de dados.
        // O método delete() normal só faz um "soft delete", marcando o registro como excluído.
        $turma->forceDelete();

        return redirect()->route('turmas.index')
            ->with('success', 'Turma excluída com sucesso!');
    }

    public function edit(Turma $turma)
    {
        return view('turmas.edit', compact('turma'));
    }
    

    public function update(Request $request, Turma $turma)
    {
        $request->validate([
            'nome' => 'required|string|max:100',
            'descricao' => 'nullable|string',
            'ano' => 'nullable|integer',
        ]);

        $turma->update($request->all());

        return redirect()->route('turmas.index')
            ->with('success', 'Turma atualizada com sucesso!');
    }


    // ... (outros métodos do resource podem ficar vazios ou implementados depois)
}
