@extends('layouts.app')
@section('content')
<div class="pull_left">
    <link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
          <div class="form">
              <h3 class="titre">Certificat Médical</h3>
 <form action="##" method="POST">
    <div class="row"> <p> Je soussigné, Docteur</p>
   <input type="text" name="nommedecin" id="nommedecin">
     <p> Certifie que letat de santé de M/Mme/Mlle</p>
     <input type="text" name="nompatient" id="nompatient">
    <p> Nécessite un repos de</p>
     <input type="text" name="date" id="date">
     <p> Jours, sauf complications, et ce à dater du : </p>
     <input type="text" name="date" id="date"></div>
     <p> Date  :</p>
     <input type="date" name="daterepos" id="daterepos">
     <p> Cachet & Signature  :</p>
     <input type="text" name="sig" id="sig">
     <br> <br>
<input type="submit" value="Envoyer">
<input type="submit" value="Imprimer">
<input type="reset" value="Effacer">
 </form>
</div>
</div>
     <style>
        body{
  margin: 0;
   padding: 0;
   background-image: url(image.jpg);
   -webkit-background-size: cover ;
   background-size: cover;
   font-family: Tahoma, Geneva, Verdana, sans-serif;
        }
.form{
   position: absolute;
   top: 60%;
   left: 50%;
   transform: translate(-50%, -50%);
   box-sizing: border-box;
   padding: 40px;
   border-radius: 15px;
   height: 600px;
  
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
   height: 20px;
   display: 16px;
   color: black;
   margin-left: 50%;
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
    </style>
    @endsection