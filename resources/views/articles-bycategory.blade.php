<x-main-layout>
    <x-navbar />
    <div class="containerFiltri">
        <h1>Filtra i tuoi articoli</h1>
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
                style="margin-top:10px">
                Filtra per categoria
            </button>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href=""> </a></li>
                    <li><a class="dropdown-item"
                            href="{{ route('articles.byCategory', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>




    <div class="containerCardIndex">
{{--         @if (DB::table('articles')->count() == 0)
            <h1 class="noArticles">Nessun articolo trovato. </h1>
        @endif --}}
        @foreach ($articles as $article)
            <x-card :title="$article['title']" :author="$article['author']" :content="$article['content']" :category="$article->category->name" :id="$article->id">
            </x-card>
        @endforeach
    </div>






</x-main-layout>
