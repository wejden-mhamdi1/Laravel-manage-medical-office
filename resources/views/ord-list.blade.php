@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="pull_left">
    <link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
          <div class="form">
              <h3 class="titre">ordonnance Médical</h3>
              @if ($message = Session::get('succ'))
<div class='alert alert-success'>
<p>{{ $message }} </p>
</div>
@endif
<a style="float:right" href="{{route('ordonnance.add')}}">add ordonnance</a>
<p> cabinet Médical </p>
    <input type="text" name="nomcabinet" id="nomcabinet">
     <p> Adresse : </p> 
     <input type="text" name="adresse" id="adresse">
     <p> Rue : </p> 
     <input type="text" name="rue" id="rue">
      <p> Je soussigné, Docteur</p>
      <input type="text" name="medecin" id="medecin">
      @foreach($ordonnces as $ordonnce)
     <p> le malade M/Mme/Mlle de nom  {{$ordonnces->nom}}  </p> //
     <p> et de prenom  {{$ordonnces->prenom}}  </p> // 
     <p> il / elle besoin de ces médicaments {{$ordonnces->medicament}} </p> //
     <p> prise chaque jours  {{$ordonnces->nombre}} fois </p> //
     <p> a l'heure {{$ordonnces->heure}}  </p> //
     <p> j'attend votre arrivage la prochaine fois dans le date  {{$ordonnces->rendez}} </p> //
     <p>  quelque conseil {{$ordonnces->conseil}} </p> //
     <p> Cachet & Signature  :</p> // 
     <input type="text" name="sig" id="sig">
     <br> <br>
<input type="submit" value="Imprimer">
 </form>
          </div>
</div>
<form action="{{route('dest',$ordonnces->id)}}" method="POST">
<a class="btn btn-primary" href="{{route('ordonnance.add')}}">ADD</a>
<a class="btn btn-primary" href="{{route('/add-ordonnance', $ordonnces->id) }}">ADD</a> 
<a class="btn btn-primary" href="{{route('/edit-ord', $ordonnces->id) }}">Edit</a>  
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
@endforeach
<style>
        body{
  margin: 0;
   padding: 0;
   font-family: Tahoma, Geneva, Verdana, sans-serif;
        }
.form{
   position: absolute;
   top: 60%;
   left: 50%;
   transform: translate(-50%, -50%);
   box-sizing: border-box;
   padding: 80px;
   border-radius: 25px;
   height: 100%;
   border: 1px solid black;
}
.titre {
   margin: 0;
   padding: 0 0 20px;
   font-weight: bold;
   color: black;
   text-align: center;
}
.form input[type=text], .form input[type=date]{
   border: none;
   border-bottom: 1px solid black;
   /*background-color: transparent;*/
   outline: none;
   height: 1px;
   display: 6px;
   color: black;
   margin-left: 10%;
}
.form input[type=submit], .form input[type=reset]{
   border: none;
   height: 40px;
   outline: none;
   font-size: 15px;
   background-color: rgb(80, 78, 78);
   cursor: pointer;
   border-radius: 20px;
}
table{
border-collapse: collapse;
width: 100% ;}
td,th{
padding: 5px;
border: 1px solid ;
}
* {
        box-sizing: border-box;
      }
        #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        float: right;*
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }
      #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#myBtn:hover {
  background-color: #555;
}
</style>
@endsection
</body>
</html>
