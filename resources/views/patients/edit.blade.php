<div class="modal-header">
    <h5 class="modal-title" id="update">Modifier la fiche du patient </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<form action="{{ route('patients.update',$patient->id) }}" method="POST">
@csrf 
@method('PUT')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-group">
<strong>Nom pateint</strong>
<input type="text" name="nom" value="{{ $patient->nom}}"
class="nom" placeholder="Name">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>Prenom</strong>
<input type="text" name="prenom" value="{{ $patient->prenom}}"
class="prenom" placeholder="prenom">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>CIN</strong>
<input type="text" name="CIN" value="{{ $patient->CIN}}"
class="CIN" placeholder="CIN">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>date de Naissance</strong>
<input type="date" name="dateNaissance" value="{{ $patient->dateNaissance}}"
class="dateNaissance" placeholder="dateNaissance">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>telephone</strong>
<input type="text" name="telephone" value="{{ $patient->telephone}}"
class="telephone" placeholder="telephone">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>email</strong>
<input type="text" name="email" value="{{ $patient->email}}"
class="email" placeholder="email">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>adresse</strong>
<input type="text" name="adresse" value="{{ $patient->adresse}}"
class="adresse" placeholder="adresse">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
    <strong>sexe</strong>
    <input type="text" name="sexe" value="{{ $patient->sexe}}" class="sexe" placeholder="sexe">
    </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-group">
        <strong>Allergies : </strong>
        <input type="text" name="allergies" value="{{ $patient->allergies}}" class="allergies" placeholder="allergies">
        </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 form-group">
            <strong>Comorbidités :</strong>
            <input type="text" name="comorbidités" value="{{ $patient->comorbidités}}" class="comorbidités" placeholder="comorbidités">
            </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 form-group">
                <strong>Maladies chroniques dans la famille :</strong>
                <input type="text" name="maladies" value="{{ $patient->maladies}}" class="maladies" placeholder="maladies">
                </div>
                </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit"  class="btn btn-primary"> submit </button>
</div>
</div>
</form>

