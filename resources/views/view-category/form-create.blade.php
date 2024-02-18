<x-main-layout>
    <x-navbar />

    <form class="form" action="/categories" method="POST" style="justify-content:start">
        @csrf
        <div class="containerForm" style="height: auto;margin-top:100px">
            @if (session('success'))
                <div id="alertSuccess"><span class="alert-success">{{ session('success') }}</span></div>
            @endif
            <h1 style="margin-bottom:20px; font-size:20px">Inserisci il nome della nuova categoria</h1>
            <div class="mb-3">
                <label for="text" class="form-label">Nome nuova categoria</label>
                <input type="text" name="name" class="form-control" id="exampleInputText" value="">
                <div class="containerSubmitForm">
                    <button id="submit" type="submit" class="btn btn-secondary" style="margin-right:20px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-return-left" viewBox="0 0 16 16" style="margin-right:5px">
                            <path fill-rule="evenodd"
                                d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                        </svg><a href="{{route('categories.index')}}">Torna alle categorie</a></button>
                    <button id="submit" type="submit" class="btn btn-secondary">Crea categoria</button>

                </div>

    </form>







</x-main-layout>
