@extends('layouts.auth')

@section('content')
    {{-- errori --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- errori --}}

    <form action="{{ route('admin.platforms.update', $platform->id) }}" method="POST" class="container" id="save-form"
        enctype="multipart/form-data">
        @csrf
        {{-- metodo put patch --}}
        @method('PUT')
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">

                        <a class="btn btn-success btn-sm"
                            onclick="event.preventDefault();
                            document.getElementById('save-form').submit();">
                            @include('partials.svg.save')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
