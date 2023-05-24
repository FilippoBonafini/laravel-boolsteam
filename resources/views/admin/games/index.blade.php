@extends('layouts.auth')

@section('content')
    {{-- BOTTONE PER AGGIUNGERE GIOCO ALL'ELNCO  --}}
    <div class=" m-a text-light d-flex justify-content-end">
        <a href="{{ route('admin.games.create') }}">
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
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                {{-- <th scope="col">Company</th> --}}
                <th scope="col"></th>
            </tr>
        </thead>
        {{-- /HEADER DELLA TABELLA  --}}

        {{-- CORPO DELLA TABELLA  --}}
        <tbody>
            {{-- RIPETIAMO QUESTA OPERAZIONE PER OGNI RECORD  --}}
            @foreach ($games as $game)
                <tr>
                    <td class=" align-middle">{{ $game->title }}</td>
                    <td class=" align-middle">{{ $game->price }}</td>
                    {{-- <td class="align-middle">{{ $game->developer }}</td> --}}
                    <td class="align-middle d-flex justify-content-end align-items-center gap-3">
                        {{-- INCLUDIAMO I BOTTONI  --}}
                        @include('partials.editZone')
                        <a href="{{ route('admin.games.show', $game->id) }}">
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
