@extends('layouts.auth')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.games.store') }}" method="POST" class="container" id="save-form"
        enctype="multipart/form-data">
        @csrf
        <div class="pt-5 row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex gap-3 align-items-center justify-content-between">
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title') }}">
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
                        {{-- <h5>Genres:</h5>
                        <p>
                            <textarea style="resize: none;" rows="5" class="form-control" id="description" name="genres">{{ trim(old('genres')) }}</textarea>
                        </p> --}}
                        <h5>Release date:</h5>
                        <p>
                            <input type="date" class="form-control" name="release_date"
                                value="{{ trim(old('release_date')) }}">
                        </p>
                        {{-- <h5>Developer:</h5>
                        <p>
                            <input type="text" class="form-control" name="developer"
                                value="{{ trim(old('developer')) }}">
                        </p> --}}
                        {{-- <h5>Platform:</h5>
                        <p>
                            <input type="text" class="form-control" name="platforms"
                                value="{{ trim(old('platforms')) }}">
                        </p>
                        <h5>Languages:</h5>
                        <p>
                            <input type="text" class="form-control" name="languages"
                                value="{{ trim(old('languages')) }}">
                        </p> --}}
                        {{-- <h5>Image Link:</h5>
                        <p>
                            <input type="text" class="form-control" name="cover" value="{{ trim(old('cover')) }}">
                        </p> --}}

                        <h5>Price</h5>
                        <p>
                            <input type="number" class="form-control" name="price" value="{{ trim(old('price')) }}">
                        </p>
                        <p>
                            <input type="number" class="form-control" min="0" max="100" step="1" name="sconto" value="{{ trim(old('sconto')) }}" placeholder="Inserisci lo sconto (opzionale)">
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

                        <h5 class="pt-3">Immagine:</h5>
                        <input type="file" class="form-control" id="image" name="image">
                        
                        <h5 class="pt-3">Poster Image:</h5>
                        <input type="file" class="form-control" id="poster_image" name="poster_image">

                        {{-- anteprima immagine upload  --}}
                        {{-- image --}}
                        <div class="preview pt-3">
                            <img id="file-image-preview">
                        </div>

                        {{-- poster image --}}
                        <div class="preview-poster pt-3">
                            <img id="file-poster-image-preview">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
