@extends('layouts.app')

@section('title', 'Ajouter un projet')

@section('content')
    <h2>Ajouter un nouveau projet</h2>

    <form action="{{ route('projets.store') }}" method="POST" class="projet-card">
        @csrf

        <label>Titre</label>
        <input type="text" name="titre" value="{{ old('titre') }}">

        <label>Description</label>
        <textarea name="description">{{ old('description') }}</textarea>

        <label>Type</label>
        <input type="text" name="type" value="{{ old('type') }}">

        <label>Images (URLs séparées par des virgules)</label>
        <input type="text" name="images" value="{{ old('images') }}">

        <label>Acquis</label>
        <textarea name="acquis">{{ old('acquis') }}</textarea>

        <label>Technologies (séparées par des virgules)</label>
        <input type="text" name="technologies" value="{{ old('technologies') }}">

        <button type="submit" class="btn-primary">Ajouter</button>
        <a href="{{ route('projets.index') }}" class="btn-secondary">Annuler</a>
    </form>
@endsection
