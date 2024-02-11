<x-main-layout>
    <x-navbar />




    <div class="containerCardIndex">
        @foreach ($articles as $article)
            <x-card :title="$article['title']" :author="$article['author']" :content="$article['content']">
            </x-card>
        @endforeach
    </div>







</x-main-layout>
