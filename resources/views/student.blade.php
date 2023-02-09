@extends('model')
@section('contents')


<html>
<body>
</body>
<nav class="navbar navbar-light bg-light">
    <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
   <center> <form class="container-fluid justify-content-start">
        <button class="btn btn-outline-danger" type="button">Mon Espace Etudiant</button>
        <a type="button" class="btn btn-sm btn-outline-danger" href="{{route('msgGeneral')}}">
            Envoyer un message
        </a>
        <a type="button" class="btn btn-sm btn-outline-danger" href="{{route('déconnexion')}}">
            Déconnexion
        </a>
    </form></center>
</nav>

</html>
@endsection
