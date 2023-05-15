@extends('layout.app')


@section('page.main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Casa</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=" align-middle">titolo</td>
                <td class=" align-middle">prezzo</td>
                <td class="align-middle">casa</td>
                <td class="align-middle d-flex justify-content-end align-items-center gap-3">
                    @include('partials.editZone')
                    <a href="/">
                        @include('partials.svg.show')
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
