@extends('layout.app')


@section('page.main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Casa</th>
                <th scope="col">Edit</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class=" align-middle">titolo</td>
                <td class=" align-middle">prezzo</td>
                <td class="align-middle">casa</td>
                <td class="align-middle">
                    @include('partials.editZone')
                </td>
                <td class="align-middle">
                    <a href="/">
                        @include('partials.svg.show')
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
