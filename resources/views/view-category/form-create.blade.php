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
                <input type="text" name="name" class="form-control" id="exampleInputText"
                    value="">
                    <div class="containerSubmitForm">
                        <button id="submit" type="submit" class="btn btn-secondary">Crea categoria</button>
                    </div>
                   
    </form>







</x-main-layout>
