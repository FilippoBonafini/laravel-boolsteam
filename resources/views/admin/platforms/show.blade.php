@extends('layouts.auth')

@section('content')
    {{-- HEADER  --}}
    <div class="d-flex justify-content-between mb-5">
        {{-- TITOLO DELLA PIATTAFORMA  --}}
        <h1 class="mt-4">#{{ $platform->id }}</h1>
        {{-- INCLUDIAMO I BOTTONI  --}}
    </div>
    {{-- /HEADER  --}}

    {{-- CORPO DEL DETTAGLIO  --}}
    <div class="row mt-5">
        <h5>Name:</h5>
        <p>{{ $platform->name }}</p>
    </div>
@endsection

