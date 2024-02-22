<div id="cardComponent" class="card">
    <div class="card-body">
        <h3 class="card-title"><span class="titoloPrincipaleCard">{{ $title }}</span></h3>
        <p class="card-subtitle mb-2 text-body-secondary"><span class="titoliCard">Autore: </span>{{ $author }}</p>
        <p class="card-subtitle mb-2 text-body-secondary"><span class="titoliCard">Categoria:</span> {{ $category }}
        </p>
        <p class="card-text">{{ $content }}</p>

        <a id="card-link" href="#" class="card-link">Visualizza di più</a>

        {{-- se sono autenticato mostra i pulsanti --}}
        @if (Auth::check())
        <div class="containerButtonCard">
            <button type="button" class="btn btn-success"><a style="text-decoration: none; color:white;"
                    href="{{ route('articles.edit', ['id' => $id]) }}">Modifica</a></button>
            <form action="{{ route('articles.destroy', ['id' => $id]) }}" method="POST" style="margin-top:20px">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    style="position: relative;bottom:10px; left:10px;font-weight:bold">Elimina</button>
            </form>
        </div>
        @endif
    </div>
</div>
