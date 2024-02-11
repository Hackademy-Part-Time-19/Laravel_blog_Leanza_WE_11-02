<x-main-layout>
    <x-navbar />

    <form class="form" action="{{ route('invio') }}" method="POST">
        @csrf
        <div class="containerForm">
            <div class="mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="exampleInputText" required>
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Autore</label>
                <input type="text" name="author" class="form-control" id="exampleInputText" required>
            </div>
            <label for="text" class="form-label">Scrivi qui il tuo articolo</label>
            <input type="text" name="content" class="form-control" id="exampleInputText" required>
            <button id="submit" type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </form>







</x-main-layout>
