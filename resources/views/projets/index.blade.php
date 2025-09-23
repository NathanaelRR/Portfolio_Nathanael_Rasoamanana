<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Projets</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">

    <h1 class="text-3xl font-bold mb-6">Mes Projets</h1>

    <p>Nombre de projets : {{ count($projets) }}</p>

    @if(count($projets) > 0)
        @foreach ($projets as $projet)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h2 class="text-xl font-semibold">{{ $projet->titre }}</h2>
                <p class="text-gray-600 mb-2">Type: {{ $projet->type }}</p>
                <p class="mb-2">{{ $projet->description }}</p>

                @if ($projet->images)
                    <div class="flex gap-2 mb-2">
                        @foreach ($projet->images as $img)
                            <img src="{{ $img }}" alt="{{ $projet->titre }}" class="w-24 h-24 object-cover rounded">
                        @endforeach
                    </div>
                @endif

                @if ($projet->technologies)
                    <p><strong>Technologies :</strong> {{ implode(', ', $projet->technologies) }}</p>
                @endif

                @if ($projet->acquis)
                    <p><strong>Acquis :</strong> {{ $projet->acquis }}</p>
                @endif
            </div>
        @endforeach
    @else
        <p>Aucun projet à afficher.</p>
    @endif

</body>
</html>
