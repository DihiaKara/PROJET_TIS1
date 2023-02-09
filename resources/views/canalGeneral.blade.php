@extends('model')

@section('contents')

    <nav class="navbar navbar-dark bg-dark">
        <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
        <div class="container-fluid">
    <span class="navbar-text">
      Bienvenue au Canal Général My ChatBox !
    </span>
        </div>
    </nav>
    <a type="button" class="btn btn-danger" href="{{route('student_page')}}">retour</a>

    <table class="table table-dark table-hover">
        <tr class="thead-dark"> <td>Pseudo</td><td>Message</td><td>Date</td></tr>

        @if(!empty($form))
            @foreach($form as $f)
                <tbody>
                <tr>
                    <td>{{$f->pseudo}}</td>
                    <td>{{$f->message}}</td>
                    <td>{{$f->time}}</td>

                </tr>
                </tbody>
            @endforeach
    </table>


    @else
        <p>ERREUR DE CHARGEMENT...</p>
    @endif

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" name="msg" class="form-label">Veuillez saisir votre message :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
        </div>
        <input type="submit" class="btn btn-danger" value="Envoyer">
        @csrf
    </form>


@endsection




