<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
        ]);

        Pessoa::create($data);
        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso!');
    }

    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', compact('pessoa'));
    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
        ]);

        $pessoa->update($data);
        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso!');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa deletada com sucesso!');
    }
}
