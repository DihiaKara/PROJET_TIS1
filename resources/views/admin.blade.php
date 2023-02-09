@extends('model')

@section('contents')
    <html>
    <body>

    <nav class="navbar navbar-light bg-light">
        <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
        <center> <form class="container-fluid justify-content-start">
            <button class="btn btn-outline-danger" type="button">Mon Espace Admin</button>
            <button type="button" class="btn btn-sm btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Gestion des utilisateurs
            </button>
            </button>
            <ul class="dropdown-menu">
                <li><a type="button" class="dropdown-item" href="{{route('affichageUsers')}}">liste des utilisateurs</a></li>
                <li><a type="button" class="dropdown-item" href="{{route('affichageStudent')}}">liste des etudiants</a></li>
                <li><a type="button" class="dropdown-item" href="{{route('validation')}}">valider un utilisateur</a></li>
            </ul>
            <a type="button" class="btn btn-sm btn-outline-danger" href="{{route('déconnexion')}}">
                Déconnexion
            </a>
        </form></center>
    </nav>

@endsection

</body>
</html>


