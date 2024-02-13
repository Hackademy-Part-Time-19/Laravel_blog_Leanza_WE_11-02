<x-main-layout>
    <x-navbar />




    <div class="containerCardIndex">
        @foreach ($articles as $article)
            <x-card :title="$article['title']" :author="$article['author']" :content="$article['content']" :category="$article['category']">
            </x-card>
        @endforeach
    </div>






</x-main-layout>
