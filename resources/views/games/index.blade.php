@extends('layout.app')


@section('page.main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Company</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td class=" align-middle">{{ $game->title }}</td>
                    <td class=" align-middle">{{ $game->price }}</td>
                    <td class="align-middle">{{ $game->developer }}</td>
                    <td class="align-middle d-flex justify-content-end align-items-center gap-3">
                        @include('partials.editZone')
                        <a href="{{ route('games.show', $game->id) }}">
                            @include('partials.svg.show')
                        </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
