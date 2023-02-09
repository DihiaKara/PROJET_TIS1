@extends('model')
@section('contents')
    <html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
    <div class="p-3 mb-2 bg-dark text-white">
        <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
        <center><p class="fs-1">Vous n'avez pas de compte ? Inscrivez-vous !</p></center>

    <center><form method="post" action="{{route('register')}}">
        <input type="text" name="nom" required placeholder="Nom"><p><br></p>
        <input type="text" name="prenom" required placeholder="Prenom"><p><br></p>
        <input type="text" name="pseudo" required placeholder="Pseudo"><p><br></p>
        <input type="password" name="password" placeholder="Mot de passe" required><p><br></p>
        <input type="password" name="password_confirmation" placeholder="Confirmation mot de passe" required><p><br></p>
        <input type="text" name="renit" required placeholder="Code secret"><p><br></p>
        <input type="text" name="email" required placeholder="Email"><p><br></p>

        <input type="submit" class="btn btn-danger" value="S'inscrire">
        <input type="reset" class="btn btn-danger" value="Reset">
        @csrf
    </form>
    </center>
    </div>

    </body>
    </html>
@endsection

