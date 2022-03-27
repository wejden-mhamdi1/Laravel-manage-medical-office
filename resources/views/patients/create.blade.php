@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
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
<form action="{{ route('patients.store') }}" method="POST">
@csrf 
<div class="container">
    <br/>
<h2 style="text-align: center ">add new patient</h2>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Patient Name : </strong>
<input type="text" name="nom" class="form-control" placeholder="nom">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Prenom : </strong>
<input type="text" name="prenom" class="form-control" placeholder="prenom">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>CIN : </strong>
<input type="text" name="CIN" class="form-control" placeholder="CIN">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Date de naissance : </strong>
<input class="form-control" type="date" id="dateNaissance" name="dateNaissance" placeholder="dateNaissance">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Num de telephone : </strong>
 <input type="text" name="telephone" class="form-control" placeholder="telephone">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Email : </strong>
<input type="text" name="email" class="form-control" placeholder="email">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Adresse : </strong>
<input type="text" name="adresse" class="form-control" placeholder="adresse">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class=" col-md-4 form-group">
    <strong>Sexe : </strong>
    <input type="text" name="sexe" class="form-control" placeholder="sexe">
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class=" col-md-4 form-group">
        <strong>Allergies : </strong>
        <input type="text" name="allergies" class="form-control" placeholder="allergies">
        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class=" col-md-4 form-group">
            <strong>Comorbidités : </strong>
            <input type="text" name="comorbidités" class="form-control" placeholder="comorbidités">
            </div>
            </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class=" col-md-4 form-group">
            <strong>Maladies chroniques dans la famille : </strong>
            <input type="text" name="maladies" class="form-control" placeholder="maladies">
            </div>
            </div>
<div class="row">
<div class="col-md-4 text-center"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success"> submit </button>
</div>
</div>
</form>
</div>
 <script type="text/javascript">  
    $('#dateNaissance').datepicker({ 
        autoclose: true,   
        format: 'yyyy-mm-dd'});
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    </script>
    </html>
@endsection