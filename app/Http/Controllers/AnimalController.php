<?php

namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animais = Animal::all();
        return view('animais.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        Animal::create($data);
        return redirect()->route('animais.index')->with('success', 'Animal criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animais.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('animais.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        $animal->update($data);
        return redirect()->route('animais.index')->with('success', 'animal atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('animais.index')->with('success', 'Animal deletada com sucesso!');
    }
}
