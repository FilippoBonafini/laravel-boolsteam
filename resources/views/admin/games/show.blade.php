@extends('layouts.auth')

@section('content')
    {{-- HEADER  --}}
    <div class="d-flex justify-content-between mb-5">
        {{-- TITOLO DEL GIOCO  --}}
        <h1>{{ $game->title }}</h1>
        {{-- INCLUDIAMO I BOTTONI  --}}
        @include('admin.games.partials.editZone')
    </div>
    {{-- /HEADER  --}}

    {{-- CORPO DEL DETTAGLIO  --}}
    <div class="row">
        {{-- <div class="col-auto">
            <img class="my-img" src="{{ $game->cover }}" alt="">
        </div> --}}
        @if ($game->image)
            <div class="preview">
                <img id="file-image-preview" class="pt-3 d-block" src="{{ asset('storage/' . $game->image) }}"
                    alt="{{ $game->title }}">
            </div>
        @endif
        <div class="col">
            <h3>Description</h3>
            <p>{{ $game->description }}</p>
            {{-- <h3>Genres</h3>
            <p>{{ $game->genres }}</p>
            <h3>Developer</h3>
            <p>{{ $game->developer }}</p> --}}
        </div>
    </div>
    {{-- CORPO DEL DETTAGLIO  --}}

    {{-- INFORMAZIONI AGGIUNTIVE ("FOOTER") --}}
    {{-- <div class="row">
        <span>{{ $game->languages }}</span>
    </div> --}}
    <div class="row mt-5">
        <h4>Price:</h4>
        <span>{{ $game->price }}$</span>
    </div>
    <div class="row mt-3">
        <h4>Release:</h4>
        <span>{{ $game->release_date }}</span>
    </div>
    {{-- /INFORMAZIONI AGGIUNTIVE ("FOOTER") --}}
@endsection
