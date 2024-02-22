<x-main-layout>
    <x-navbar />




    <div class="containerCardIndex">
        @if (DB::table('articles')->count() == 0)
            <h1 class="noArticles">Nessun articolo trovato. </h1>
        @endif
        @foreach ($articles as $article)
            <x-card :title="$article['title']" :author="$article['author']" :content="$article['content']" :category="$article->category->name" :id="$article->id">
            </x-card>
        @endforeach
    </div>






</x-main-layout>
