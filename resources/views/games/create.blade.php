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
                        <h5>Description:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description')) }}</textarea>
                        </p>
                        <h5>Genres:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="genres">{{ trim(old('genres')) }}</textarea>
                        </p>
                        <h5>Release year:</h5>
                        <p>
                            <input type="number" class="form-control" name="release_year"
                                value="{{ trim(old('release_year')) }}">
                        </p>
                        <h5>Developer:</h5>
                        <p>
                            <input type="text" class="form-control" name="developer"
                                value="{{ trim(old('developer')) }}">
                        </p>
                        <h5>Platform:</h5>
                        <p>
                            <input type="text" class="form-control" name="platforms"
                                value="{{ trim(old('platforms')) }}">
                        </p>
                        <h5>Languages:</h5>
                        <p>
                            <input type="text" class="form-control" name="languages"
                                value="{{ trim(old('languages')) }}">
                        </p>
                        <h5>Image Link:</h5>
                        <p>
                            <input type="text" class="form-control" name="cover" value="{{ trim(old('cover')) }}">
                        </p>

                        <h5>Price</h5>
                        <p>
                            <input type="number" class="form-control" name="price" value="{{ trim(old('price')) }}">
                        </p>
                        <div class="form-group">
                            <label for="crossplay">Cross Play</label>
                            <input type="checkbox" id="crossplay" name="crossplay" value="1"
                                @if (old('crossplay')) checked @endif>
                        </div>
                        <div class="form-group">
                            <label for="online">Online</label>
                            <input type="checkbox" id="online" name="online" value="1"
                                @if (old('online')) checked @endif>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
