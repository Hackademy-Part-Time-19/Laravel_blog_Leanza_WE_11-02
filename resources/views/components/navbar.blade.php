<nav id="navbar" class="navbar navbar-expand-lg bg-body-secondary">
    <div id="container-fluid" class="container-fluid">
        <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
            <a class="navbar-brand" href="{{route ('home')}}">Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route ('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('articles.index')}}">Articoli</a>
                    </li>
                    <li class="nav-item" style="font-weight: bold">
                        <a class="nav-link" href="{{route('articles.create')}}">Inserisci un articolo</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
