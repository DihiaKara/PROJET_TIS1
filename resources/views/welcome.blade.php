@extends('model')
@section('contents')
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My ChatBox</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/register">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/authentification">Connexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
  <img src="img1.jpeg" width="1500" class="img-fluid" alt="Responsive image">
    </body>
    </html>
