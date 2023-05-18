<nav class="navbar bg-dark">
    <div class="container-fluid">

        {{-- LOGO CON REINDIRIZZAMENTO ALLA HOME PAGE  --}}
        <a href="/" class="navbar-brand mb-0 fs-1 text-light">BOOLSTEAM</a>
        {{-- /LOGO CON REINDIRIZZAMENTO ALLA HOME PAGE  --}}

        {{-- PULSANTE PER AGGIUNGERE UN RECORD  --}}
        <div class="m-a text-light">
            <a href="{{route('games.create')}}">
                {{-- INCLUDIAMO L'ICONA DEL PIU' --}}
                @include('partials.svg.add')
            </a>
        </div>
        {{-- /PULSANTE PER AGGIUNGERE UN RECORD  --}}

    </div>
</nav>
