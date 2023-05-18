@extends('layout.app')

@section('page.main')

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

    <form action="{{ route('games.update',$game->id) }}" method="POST" class="container" id="save-form">
        {{-- token --}}
        @csrf
        {{-- metodo put patch --}}
        @method('PUT')

        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $game->title) }}">
                        <a class="btn btn-success btn-sm"
                            onclick="event.preventDefault();
                        document.getElementById('save-form').submit();">
                            @include('partials.svg.save')
                        </a>
                    </div>
                    <div class="card-body">
                        <h5>Description:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="description">{{ trim(old('description', $game->description)) }}</textarea>
                        </p>
                        <h5>Genres:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="genres">{{ trim(old('genres', $game->genres)) }}</textarea>
                        </p>
                        <h5>Release year:</h5>
                        <p>
                            <input type="number" class="form-control" name="release_year"
                                value="{{ trim(old('release_year', $game->release_year)) }}">
                        </p>
                        <h5>Developer:</h5>
                        <p>
                            <input type="text" class="form-control" name="developer"
                                value="{{ trim(old('developer', $game->developer)) }}">
                        </p>
                        <h5>Platform:</h5>
                        <p>
                            <input type="text" class="form-control" name="platforms"
                                value="{{ trim(old('platforms', $game->platforms)) }}">
                        </p>
                        <h5>Languages:</h5>
                        <p>
                            <input type="text" class="form-control" name="languages"
                                value="{{ trim(old('languages', $game->languages)) }}">
                        </p>
                        <h5>Image Link:</h5>
                        <p>
                            <input type="text" class="form-control" name="cover" value="{{ trim(old('cover', $game->cover)) }}">
                        </p>

                        <h5>Price</h5>
                        <p>
                            <input type="number" class="form-control" name="price" value="{{ trim(old('price', $game->price)) }}">
                        </p>
                        
                        <div class="form-group">
                            <label for="crossplay">Cross Play</label><br>
                            <div class="d-flex">
                                <input type="radio" id="crossplay_true" name="crossplay" value="1"
                                    @if (old('crossplay') === '1') checked @endif>
                                <label for="crossplay_true">True</label><br>
                                <input type="radio" id="crossplay_false" name="crossplay" value='0'
                                    @if (old('crossplay') === '0') checked @endif>
                                <label for="crossplay_false">False</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="online">Online</label><br>
                            <div class="d-flex">
                                <input type="radio" id="online_true" name="online" value="1"
                                    @if (old('online') === '1') checked @endif>
                                <label for="online_true">True</label><br>
                                <input type="radio" id="online_false" name="online" value='0'
                                    @if (old('online') === '0') checked @endif>
                                <label for="online_false">False</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
