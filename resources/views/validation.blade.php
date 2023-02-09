@extends('model')

@section('contents')
    <img src="logo.webp" width="100" class="img-fluid" alt="Logo">
    <p><br></p>
    <a type="button" class="btn btn-danger" href="{{route('admin_page')}}">retour</a>
    <p>Vous pouvez valider un utilisateur en lui affectant le statut qui convient : le statut "admin" pour un administrateur, le statut "student" pour un Etudiant</p>
    <table class="table table-dark table-hover">
        <tr class="thead-dark"> <td>id</td><td>nom</td><td>prenom</td><td>pseudo</td><td>statut</td></tr>

        @if(!empty($form))
            @foreach($form as $f)
                <tbody>
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nom}}</td>
                    <td>{{$f->prenom}}</td>
                    <td>{{$f->pseudo}}</td>
                    <td>{{$f->statut}}</td>
                </tr>
                </tbody>
            @endforeach
    </table>
    <div class="col-md-12">
        {!!$form->links() !!}
    </div>

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
        <input type="number" required name="id" placeholder="Saisir l'Id " value="{{old('id')}}">
        <input type="text" required name="nom" placeholder="Nom" value="{{old('nom')}}">
        <input type="text" required name="prenom" placeholder="Prenom" value="{{old('prenom')}}">
        <input type="text" required name="statut" placeholder="Statut" value="{{old('statut')}}">
        <input type="submit" class="btn btn-danger" value="Valider">
        @csrf
    </form>

@endsection



