@extends('layouts.app')

@section('title', $projet->titre)

@section('content')
    <div class="projet-card">
        <h2>{{ $projet->titre }}</h2>
        <p><em>Type :</em> {{ $projet->type }}</p>
        <p>{{ $projet->description }}</p>

        @if ($projet->images)
            <div>
                @foreach ($projet->images as $img)
                    <img src="{{ $img }}" alt="{{ $projet->titre }}" width="120">
                @endforeach
            </div>
        @endif

        @if ($projet->technologies)
            <p><strong>Technologies :</strong> {{ implode(', ', $projet->technologies) }}</p>
        @endif

        @if ($projet->acquis)
            <p><strong>Acquis :</strong> {{ $projet->acquis }}</p>
        @endif

        <a href="{{ route('projets.index') }}" class="btn-secondary">← Retour</a>
    </div>
@endsection
