<div class="d-flex gap-2 align-items-center">
    {{-- BOTTONE DI CANCELLAZIONE DEL RECORD  --}}
    <form>
        <button type="submit" class="btn btn-danger btn-sm">
            {{-- INCLUDIAMO L'ICONA DEL CESTINO  --}}
            @include('partials.svg.delete')
        </button>
    </form>
    {{-- /BOTTONE DI CANCELLAZIONE DEL RECORD  --}}

    {{-- BOTTONE DI MODIFICA DEL RECORD  --}}
    <a href="/" class="btn btn-warning btn-sm d-inline-block">
        {{-- INCLUDIAMO L'ICONA DELLA MATITA  --}}
        @include('partials.svg.edit')
    </a>
    {{-- /BOTTONE DI MODIFICA DEL RECORD  --}}

</div>
