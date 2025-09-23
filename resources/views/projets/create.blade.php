<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-6">Ajouter un projet</h1>

    <form action="{{ route('projets.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block font-semibold mb-1">Titre</label>
            <input type="text" name="titre" class="w-full border px-2 py-1 rounded" value="{{ old('titre') }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Description</label>
            <textarea name="description" class="w-full border px-2 py-1 rounded">{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Type</label>
            <input type="text" name="type" class="w-full border px-2 py-1 rounded" value="{{ old('type') }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Images (URLs séparées par des virgules)</label>
            <input type="text" name="images[]" class="w-full border px-2 py-1 rounded">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Acquis</label>
            <textarea name="acquis" class="w-full border px-2 py-1 rounded">{{ old('acquis') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Technologies (séparées par des virgules)</label>
            <input type="text" name="technologies[]" class="w-full border px-2 py-1 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ajouter</button>
        <a href="{{ route('projets.index') }}" class="ml-2 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Annuler</a>
    </form>
</body>
</html>
