<!DOCTYPE html>
<html>
<div class="modal-header">
<h5 class="modal-title" id="update">Modifier la consultation </h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form action="{{ route('historique.update',$historique->id) }}" method="POST">
@csrf 
@method('PUT')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 form-group">
<strong>date de Rendez-vous : </strong>
<input type="datetime-local" name="dateRV" value="{{ $historique->dateRV}}"
class="dateRV" placeholder="date de Rendez-vous">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>pathologie : </strong>
<input type="text" name="pathologie" value="{{ $historique->pathologie}}"
class="pathologie" placeholder="pathologie">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>actes chirurgicaux : </strong>
<input type="text" name="actes_chirurgicaux" value="{{ $historique->actes_chirurgicaux}}"
class="actes_chirurgicaux" placeholder="actes chirurgicaux">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>examens médicaux demandés : </strong>
<input type="text" name="examens" value="{{ $historique->examens}}"
class="examens" placeholder="examens médicaux demandés">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>assurrance : </strong>
<input type="text" name="assurrance" value="{{ $historique->assurrance}}"
class="assurrance" placeholder="assurrance">
</div>
</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 form-group">
<strong>Remarques : </strong>
<input type="text" name="Remarque" value="{{ $historique->Remarque}}"
class="Remarque" placeholder="Remarques">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit"  class="btn btn-primary"> submit </button>
</div>
</div>
</form>
</html>