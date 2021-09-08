<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
        <a class="navbar-brand" href="#">MarketPlace</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Annonces</a>
                </li>

                <li class="nav-item">
                    @if (Auth::user())
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item">
                                <a class="nav-link" href="#">Espace admin</a>
                            </li>
                        @endif
                        @if (Auth::user()->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bonjour {{ Auth::user()->name }}</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <form action="#" method="POST">
                                @csrf
                                <button type="submit" class="btn" style="color:white;">Déconnexion</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Se  connecter</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">S'inscrire</a></li>
                    @endif
                        
                </li>
                
            </ul>

            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>

        </div>
    </div>

</nav>