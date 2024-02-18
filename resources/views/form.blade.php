<x-main-layout>
    <x-navbar />

    <form class="form" action="{{ route('invio') }}" method="POST" style="justify-content: start;padding-top:50px">
        @csrf
        <div class="containerForm" style="min-height:600px;height:auto">
           
            @if(session('success'))
            <div id="alertSuccess"><span class="alert-success">{{ session('success') }}</span></div>
            @endif
            <h1 style="margin-bottom:20px; font-size:30px">Inserisci il tuo articolo</h1>
            <div class="mb-3">
                <label for="text" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control" id="exampleInputText" value="{{old('title')}}" >
            </div>
            @error('title')
                <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
               @enderror
            <div class="mb-3">
                <label for="text" class="form-label">Autore</label>
                <input type="text" name="author" class="form-control" id="exampleInputText" value="{{old('author')}}" >
            </div>
            @error('author')
            <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
           @enderror
            <select class="form-select" name="category" id="category">
                <option selected value="">Seleziona la categoria dell'articolo </option>
                @foreach ($categories as $category)
                <option value={{$category['name']}}>{{$category['name']}}</option>
                @endforeach
            </select>
          
            @error('category')
            <div id="alertError"><span class="alert-danger">{{ $message }}</span></div>
           @enderror

            <label for="text" class="form-label">Scrivi qui il tuo articolo</label>
            <input type="text" name="content" class="form-control" id="exampleInputText" value="{{old('content')}}" >
            @error('content')
            <div id="alertError" style="margin-top: 20px;"><span class="alert-danger">{{ $message }}</span></div>
           @enderror

            <div class="containerSubmitForm">
                <button id="submit" type="submit" class="btn btn-secondary">Crea il tuo articolo</button>
            </div>
        </div>

    </form>







</x-main-layout>
