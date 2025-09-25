@extends('layouts.app')

@section('title', 'Modifier Projet')

@section('content')
    <h2>Modifier le projet</h2>

    <form action="{{ route('projets.update', $projet) }}" method="POST" class="projet-card">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Titre</label>
            <input type="text" name="titre"
                   value="{{ old('titre', $projet->titre) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Description</label>
            <textarea name="description">{{ old('description', $projet->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Type</label>
            <input type="text" name="type"
                   value="{{ old('type', $projet->type) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Images (URLs séparées par des virgules)</label>
            <input type="text" name="images"
                   value="{{ old('images', implode(',', $projet->images ?? [])) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Acquis</label>
            <textarea name="acquis">{{ old('acquis', $projet->acquis) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Technologies (séparées par des virgules)</label>
            <input type="text" name="technologies"
                   value="{{ old('technologies', implode(',', $projet->technologies ?? [])) }}">
        </div>

        <button type="submit" class="btn-primary">Mettre à jour</button>
        <a href="{{ route('projets.index') }}" class="btn-secondary">Annuler</a>
    </form>
@endsection
