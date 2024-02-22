<x-main-layout>
    <x-navbar />

    <form class="form" action="{{ route('articles.update', ['id' => $article->id]) }}" method="POST"
        style="justify-content: start;padding-top:50px">
        @csrf
        @method('PUT')
        <div class="containerForm" style="min-height:600px;height:auto">

            @if (session('success'))
                <div id="alertSuccess"><span class="alert-success">{{ session('success') }}</span></div>
            @endif
            <h1 style="margin-bottom:20px; font-size:30px">Modifica il tuo articolo</h1>
            <div class="mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="exampleInputText"
                    value="{{ old('title', $article->title) }}">
            </div>
            @error('title')
                <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
            @enderror
            <div class="mb-3">
                <label for="text" class="form-label">Autore</label>
                <input type="text" name="author" class="form-control" id="exampleInputText"
                    value="{{ old('author', $article->author) }}">
            </div>
            @error('author')
                <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
            @enderror

            <select class="form-select" name="category_id" id="category">
                <option selected value="">Seleziona la nuova categoria dell'articolo </option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                @endforeach
            </select>

            @error('category_id')
                <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
            @enderror

            <label for="text" class="form-label">Scrivi qui il tuo articolo</label>
            <input type="text" name="content" class="form-control" id="exampleInputText"
                value="{{ old('content', $article->content) }}">
            @error('content')
                <div id="alertError" style="margin-top: 20px;"><span class="alert-danger">{{ $message }}</span></div>
            @enderror

            <div class="containerSubmitForm">
                <button id="submit" type="submit" class="btn btn-secondary" style="margin-right:20px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-return-left" viewBox="0 0 16 16" style="margin-right:5px">
                        <path fill-rule="evenodd"
                            d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                    </svg><a href="{{ route('articles.index') }}">Indietro</a></button>


                <button id="submit" type="submit" class="btn btn-secondary">Salva le modifiche</button>
            </div>
        </div>

    </form>







</x-main-layout>
