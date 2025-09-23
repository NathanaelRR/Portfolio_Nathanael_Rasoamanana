<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $projet->titre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <h1 class="text-3xl font-bold mb-6">{{ $projet->titre }}</h1>

    <p class="text-gray-600 mb-2">{{ $projet->type }}</p>
    <p class="mb-4">{{ $projet->description }}</p>

    @if ($projet->images)
        <div class="flex gap-2 overflow-x-auto mb-4">
            @foreach ($projet->images as $img)
                <img src="{{ $img }}" alt="{{ $projet->titre }}" class="w-48 h-48 object-cover rounded">
            @endforeach
        </div>
    @endif

    <div class="mb-2">
        <strong>Technologies :</strong>
        <ul class="list-disc list-inside">
            @foreach ($projet->technologies ?? [] as $tech)
                <li>{{ $tech }}</li>
            @endforeach
        </ul>
    </div>

    <div class="mb-2">
        <strong>Acquis :</strong>
        <p>{{ $projet->acquis }}</p>
    </div>

    <a href="{{ route('projets.index') }}" class="mt-4 inline-block bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Retour à la liste</a>
</body>
</html>
