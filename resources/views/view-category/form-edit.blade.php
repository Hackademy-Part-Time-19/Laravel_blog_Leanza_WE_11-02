<x-main-layout>
    <x-navbar />

    <form class="form" action="{{route('categories.update', compact('category'))}}" method="POST" style="justify-content:start">
        @csrf
        @method('PUT')
        <div class="containerForm" style="height: auto;margin-top:100px">
           
            <h1 style="margin-bottom:20px; font-size:20px">Inserisci la nuova categoria</h1>
            <div class="mb-3">
                <label for="text" class="form-label">Nome nuova categoria</label>
                <input type="text" name="name" class="form-control" id="exampleInputText"
                    value="{{old('name', $category->name)}}">
                    <div class="containerSubmitForm">
                        <button id="submit" type="submit" class="btn btn-secondary">Modifica categoria</button>
                    </div>
                   
    </form>







</x-main-layout>