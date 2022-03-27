@extends('layouts.app')
@section('content')
<div class="pull_left">
    <link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    @if ($errors->any())
<div class="alert alert-danger">
<strong>whoops!!!</strong> there were some problems <br><br>
<ul>
@foreach ($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach 
</ul>
</div>
@endif
<form action="{{route('save.ordonnance')}}" method="POST">
  @csrf
  <h2 style="text-align: center; margin-bottom: 1em;">Add new ordonnance</h2>
<div class="game-quiz-container">
        <div class="button-box">
        <strong>Nom :</strong> <input type="text" class="input-field" name="nom" id="nom" value="">
        <strong> Prénom :</strong> <br><input type="text" class="input-field" name="prenom" id="prenom" value=""> </br>
        <strong>Médicaments : </strong><br><input type="text" class="input-field" name="medicament" id="" value=""> </br>
        <strong>Le temps de prise :</strong> <br><input type="text" class="input-field"  id="heure" name="heure" value="" > </br>
        <strong>Nombre de pilules par jour :</strong> <br><input type="text" class="input-field" name="nombre" id="nombre" value=""> </br>
        <strong>Date prochain rendez-vous :</strong> <br><input type="date" class="input-field" id="rendez"  name="rendez" value="" > </br>
        <strong>Conseil :</strong><textares><input style="margin-bottom: 1.5em;" type="text" class="input-field" id="conseil" name="conseil" value=""  ></textares>
<button type="submit" class="submit-btn"> submit </button>
</div>
  </div>
</form>
</div>
  <style>
    *{
    margin: 0;
    padding: 0;
    font-family: Serif;
    box-sizing: border-box;
}
html, body{
    height: 100%;   
}
main{
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
}
.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid rgb(61, 12, 50);
	outline: none;
	background: transparent;
}
.game-details-container{
    width: 80%;
    height: 4rem;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.game-quiz-container{
width: 30rem;
height: 52rem;
background-color: rgb(245, 245, 245);
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-around;
border-radius: 30px;  
}
.submit-btn{
	width: 50%;
	padding: 10px 20px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: rgb(0, 0, 128)  ;
	border: 0;
	outline: none;
	border-radius: 30px;
}
.button-box{
	width: 25rem;
    height: 52rem;
	margin: 35px auto;
	position: relative;
	border-radius: 30px;
}
   
    </style>
</form>
 @endsection