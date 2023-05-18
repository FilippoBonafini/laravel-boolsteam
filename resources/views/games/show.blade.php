@extends('layout.app')

@section('page.main')
    {{-- HEADER  --}}
    <div class="d-flex justify-content-between mb-5">
        {{-- TITOLO DEL GIOCO  --}}
        <h1>{{ $game->title }}</h1>
        {{-- INCLUDIAMO I BOTTONI  --}}
        @include('partials.editZone')
    </div>
    {{-- /HEADER  --}}

    {{-- CORPO DEL DETTAGLIO  --}}
    <div class="row">
        <div class="col-auto">
            <img class="my-img" src="{{ $game->cover }}" alt="">
        </div>
        <div class="col">
            <h3>Description</h3>
            <p>{{ $game->description }}</p>
            <h3>Genres</h3>
            <p>{{ $game->genres }}</p>
            <h3>Developer</h3>
            <p>{{ $game->developer }}</p>
        </div>
    </div>
    {{-- CORPO DEL DETTAGLIO  --}}

    {{-- INFORMAZIONI AGGIUNTIVE ("FOOTER") --}}
    <div class="row">
        <span>{{ $game->languages }}</span>
    </div>
    <div class="row mt-5">
        <h4>Price:</h4>
        <span>{{ $game->price }}$</span>
    </div>
    <div class="row mt-3">
        <h4>Release:</h4>
        <span>{{ $game->release_year }}</span>
    </div>
    {{-- /INFORMAZIONI AGGIUNTIVE ("FOOTER") --}}
@endsection