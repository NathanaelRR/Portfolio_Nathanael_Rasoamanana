
@extends('layouts.app')

@section('title', 'Liste des projets')

@section('content')
    <h2>Mes Projets</h2>

    <p>Nombre de projets : {{ count($projets) }}</p>

    @if(count($projets) > 0)
        @foreach ($projets as $projet)
            <div class="projet-card">
                <h3>{{ $projet->titre }}</h3>
                <p><em>Type :</em> {{ $projet->type }}</p>
                <p>{{ $projet->description }}</p>

                @if ($projet->images)
                    <div>
                        @foreach ($projet->images as $img)
                            <img src="{{ $img }}" alt="{{ $projet->titre }}" width="100">
                        @endforeach
                    </div>
                @endif

                @if ($projet->technologies)
                    <p><strong>Technologies :</strong> {{ implode(', ', $projet->technologies) }}</p>
                @endif

                @if ($projet->acquis)
                    <p><strong>Acquis :</strong> {{ $projet->acquis }}</p>
                @endif
                <!-- ✅ Bouton Voir -->
                <div class="actions">
                    <a href="{{ route('projets.show', $projet) }}" class="btn-primary">Voir</a>
                </div>
            </div>
        @endforeach
    @else
        <p>Aucun projet à afficher.</p>
    @endif
@endsection
