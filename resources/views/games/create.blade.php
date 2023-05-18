@extends('layout.app')

@section('page.main')
    <form action="{{ route('games.store') }}" method="POST" class="container" id="save-form">
        @csrf
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">


                        <a class="btn btn-success btn-sm"
                            onclick="event.preventDefault();
                        document.getElementById('save-form').submit();">
                            @include('partials.svg.save')
                        </a>


                    </div>
                    <div class="card-body">
                        <h5>Description</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description')) }}</textarea>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
