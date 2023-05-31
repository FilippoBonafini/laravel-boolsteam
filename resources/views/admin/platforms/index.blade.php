@extends('layouts.auth')

@section('content')
    {{-- BOTTONE PER AGGIUNGERE GIOCO ALL'ELNCO  --}}
    <div class=" m-a text-light d-flex justify-content-end">
        <a href="{{ route('admin.platforms.create') }}">
            {{-- INCLUDIAMO L'ICONA DEL PIU' --}}

            @include('partials.svg.add')
        </a>
    </div>
    {{-- /BOTTONE PER AGGIUNGERE GIOCO ALL'ELNCO  --}}
    {{-- TABELLA DOVE VENGONO VISUALIZZATI I CAMPI  --}}
    <table class="table">
        {{-- HEADER DELLA TABELLA  --}}
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                {{-- <th scope="col">Company</th> --}}
                <th scope="col"></th>
            </tr>
        </thead>
        {{-- /HEADER DELLA TABELLA  --}}

        {{-- CORPO DELLA TABELLA  --}}
        <tbody>
            @if (session('message'))
                <div class="alert alert-info mb-4" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            {{-- RIPETIAMO QUESTA OPERAZIONE PER OGNI RECORD  --}}
            @foreach ($platforms as $platform)
                <tr>
                    <td class=" align-middle">{{ $platform->name }}</td>
                    <td class=" align-middle">{{ $platform->id }}</td>
                    {{-- <td class="align-middle">{{ $game->developer }}</td> --}}
                    <td class="align-middle d-flex justify-content-end align-items-center gap-3">
                        {{-- INCLUDIAMO I BOTTONI  --}}
                        @include('admin.platforms.partials.editZone')
                        <a href="{{ route('admin.platforms.show', $platform->id) }}">
                            @include('partials.svg.show')
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{-- CORPO DELLA TABELLA  --}}

    </table>
    {{-- /TABELLA DOVE VENGONO VISUALIZZATI I CAMPI  --}}
@endsection
