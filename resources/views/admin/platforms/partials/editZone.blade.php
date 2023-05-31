<div class="d-flex gap-2 align-items-center">
    {{-- BOTTONE DI CANCELLAZIONE DEL RECORD  --}}
    <form action="{{ route('admin.platforms.destroy', $game->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
            {{-- INCLUDIAMO L'ICONA DEL CESTINO  --}}
            @include('partials.svg.delete')
        </button>
    </form>
    {{-- /BOTTONE DI CANCELLAZIONE DEL RECORD  --}}

    {{-- BOTTONE DI MODIFICA DEL RECORD  --}}
    <a href="{{ route('admin.games.edit', $game->id)}}" class="btn btn-warning btn-sm d-inline-block">
        {{-- INCLUDIAMO L'ICONA DELLA MATITA  --}}
        @include('partials.svg.edit')
    </a>
    {{-- /BOTTONE DI MODIFICA DEL RECORD  --}}

</div>
