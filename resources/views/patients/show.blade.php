<div class="modal-header">
<h5 class="modal-title" id="update2">La fiche du patient {{ $patient->nom}} {{ $patient->prenom}}</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form action="{{ route('patients.show',$patient->id) }}" method="POST">
@csrf 
@method('PUT')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <strong style="color:DarkRed;text-align:center; margin-bottom: 0.5em;">Comorbidités : </strong>
        <strong  style="color:Navy;text-align:center; margin-bottom: 0.5em;" >{{ $patient->comorbidités}}</strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
        <strong style="color:DarkRed;text-align:center; margin-bottom: 0.5em;">Allergies : </strong>
        <strong  style="color:Navy;text-align:center; margin-bottom: 0.5em;" >{{ $patient->allergies}}</strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
        <strong style="color:DarkRed;text-align:center; margin-bottom: 0.5em;">Maladies chroniques dans la famille : </strong>
        <strong  style="color:Navy;text-align:center; margin-bottom: 0.5em;">{{ $patient->maladies}}</strong>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
<strong style="text-align: center ">Nom patient : </strong>
<strong style="text-align: center; margin-bottom: 0.5em;">{{ $patient->nom}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <strong style="text-align: center ">Prénom patient : </strong>
    <strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->prenom}}</strong>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
<strong>CIN : </strong>
<strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->CIN}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
<strong>date de Naissance : </strong>
<strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->dateNaissance}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
<strong>telephone : </strong>
<strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->telephone}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
<strong>email : </strong>
<strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->email}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
<strong>adresse : </strong>
<strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->adresse}}</strong>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <strong>sexe : </strong>
    <strong style="text-align: center;margin-bottom: 0.5em;">{{ $patient->sexe}} </strong>
    </div>
</div>
</div>
</form>
