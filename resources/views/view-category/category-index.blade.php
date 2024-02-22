<x-main-layout>
    <x-navbar />

    <div class="introCategories">
        <h1>Visualizza, aggiungi, modifica o rimuovi le tue categorie di articoli</h1>
        <div>
            <button button type="button" class="btn btn-success" role="button"><a style="text-decoration: none;"
                    href="/categories/create">Aggiungi Categoria</a></button>
        </div>
        @if (session('deleted'))
            <div id="alertSuccess" style="margin-top:20px;"><span class="alert-success">{{ session('deleted') }}</span></div>
        @endif
    </div>


    </div>

    <table class="table" id="table" style="margin-top:20px; margin-left:20px">
        <thead>
            <tr>
                <th scope="col"># ID</th>
                <th scope="col">Nome Categoria</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td id="tdButton">
                        <button type="button" class="btn btn-success"><a style="text-decoration: none;"
                                href="{{ route('categories.edit', ['category' => $category->id]) }}">Modifica</a></button>

                        <form action="{{route('categories.destroy', ['category' => $category->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
        </tbody>
        @endforeach

    </table>


</x-main-layout>
