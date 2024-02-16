<nav id="navbar" class="navbar navbar-expand-lg bg-body-secondary">
    <div id="container-fluid" class="container-fluid">
        <a class="navbar-brand mx-2" style="font-weight: bold; font-size:25px" href="{{route ('home')}}">Blog</a>
        <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
            
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
                    <li class="nav-item" >
                        <a class="nav-link" href="{{route('articles.create')}}">Inserisci un articolo</a>
                    </li>
                </ul>
            </div>
           
                
        </div>
        <ul class="navbar-nav">
            @auth
            <li class="nav-item" style="font-weight: 400">
                <a class="nav-link" href="">Utente logato: {{auth()->user()->name ?? ''}}</a></a>
            </li>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-secondary" type="submit">Logout</button>
            </form>
            @endauth
            @guest
            <li class="nav-item" style="font-weight: bold">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item" style="font-weight: bold"> 
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
            </li>
            @endguest
    </div>
    
</nav>
