<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Projet</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-6">Modifier le projet</h1>

    <form action="{{ route('projets.update', $projet) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-semibold mb-1">Titre</label>
            <input type="text" name="titre" class="w-full border px-2 py-1 rounded" value="{{ old('titre', $projet->titre) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Description</label>
            <textarea name="description" class="w-full border px-2 py-1 rounded">{{ old('description', $projet->description) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Type</label>
            <input type="text" name="type" class="w-full border px-2 py-1 rounded" value="{{ old('type', $projet->type) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Images (URLs séparées par des virgules)</label>
            <input type="text" name="images[]" class="w-full border px-2 py-1 rounded" value="{{ old('images', implode(',', $projet->images ?? [])) }}">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Acquis</label>
            <textarea name="acquis" class="w-full border px-2 py-1 rounded">{{ old('acquis', $projet->acquis) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">Technologies (séparées par des virgules)</label>
            <input type="text" name="technologies[]" class="w-full border px-2 py-1 rounded" value="{{ old('technologies', implode(',', $projet->technologies ?? [])) }}">
        </div>

        <button type="submit" class="bg-yellow-400 px-4 py-2 rounded hover:bg-yellow-500">Mettre à jour</button>
        <a href="{{ route('projets.index') }}" class="ml-2 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Annuler</a>
    </form>
</body>
</html>
