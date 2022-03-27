<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="btn btn-primary" href="{{ route('ord-list') }}"> retour </a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>whoops!</strong> u have some problems with ur input <br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach

@if(Session::has(('ord_update'))
<span>{{Session::get('ord_update')}}</span>
@endif

<form method="POST" action="{{route('update.ord')}}">
@csrf
<input type="hidden" name="id" value="{{$ordonnces->id}}">
nom : <br><input type="text"  name="nom" value="{{$ordonnces->nom}}"> </br>
prenom : <br><input type="text"  name="prenom" value="{{$ordonnces->prenom}}"> </br>
medicament : <br><input type="text"  name="medicament" value="{{$ordonnces->medicament}}"> </br>
conseil : <br><textares name="conseil"value="{{$ordonnces->conseil}}"></textares></br>
l'heure : <br><input name=" heure"value="{{$ordonnces->heure}}"></br>
nombre de pilule par jour : <br><input name=" nombre"value="{{$ordonnces-> nombre}}"></br>
rendez-vous suivant : <br><date name=" rendez"value="{{$ordonnces-> rendez}}"></br>
<input type="submit" value="Submit">
</form>
</body>
</html>