<nav id="navbar" class="navbar navbar-expand-lg bg-body-secondary">
    <div id="container-fluid" class="container-fluid">
        <a class="navbar-brand mx-2" style="font-weight: bold; font-size:25px" href="{{route ('home')}}">Blog</a>
        <div class="d-md-flex d-block flex-row mx-md-auto mx-0" id="containerNav">
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" style="position: relative; right:20px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="margin-left:130px" href="{{route ('home')}}">Home</a>
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
        <ul class="navbar-nav" style="">
            @auth
            <li class="nav-item" style="font-weight: 400;">
                <div class="dropdown" style="margin-right: 10px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 15px">
                         Login: {{auth()->user()->name ?? ''}}
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Profilo</a></li>
                      <li><a class="dropdown-item" href="/categories">Gestisci le categorie</a></li>
                    </ul>
                  </div>
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
