@extends('model')
@section('contents')
    <html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
    <div class="p-3 mb-2 bg-dark text-white">
    <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
    <center><p class="fs-1">Connexion</p></center>
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <center> <form method="post">
            <input type="text" name="pseudo" required placeholder="Pseudo" value="{{old('pseudo')}}"><br><br>
            <input type="password" name="password" placeholder="Mot de passe" required><br><br>
            <input type="submit" class="btn btn-danger" value="Se connecter">
            <input type="reset" class="btn btn-danger" value="Reset">
            @csrf
        </form></center></div>
    @endsection

    </body>
    </html>



