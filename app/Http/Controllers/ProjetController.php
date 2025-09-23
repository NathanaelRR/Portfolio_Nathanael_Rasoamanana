<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;


class ProjetController extends Controller
{
    // Afficher tous les projets
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));

    }

    // Formulaire pour créer un projet
    public function create()
    {
        return view('projets.create');
    }

    // Enregistrer un nouveau projet
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:100',
            'images' => 'nullable|array',
            'images.*' => 'nullable|string',
            'acquis' => 'nullable|string',
            'technologies' => 'nullable|array',
            'technologies.*' => 'nullable|string',
        ]);

        Projet::create($data);

        return redirect()->route('projets.index')->with('success', 'Projet ajouté avec succès !');
    }

    // Afficher un projet
    public function show(Projet $projet)
    {
        return view('projets.show', compact('projet'));
    }

    // Formulaire pour éditer un projet
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }

    // Mettre à jour un projet
    public function update(Request $request, Projet $projet)
    {
        $data = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'type' => 'required|string|max:100',
            'images' => 'nullable|array',
            'images.*' => 'nullable|string',
            'acquis' => 'nullable|string',
            'technologies' => 'nullable|array',
            'technologies.*' => 'nullable|string',
        ]);

        $projet->update($data);

        return redirect()->route('projets.index')->with('success', 'Projet mis à jour !');
    }

    // Supprimer un projet
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé !');
    }
}
