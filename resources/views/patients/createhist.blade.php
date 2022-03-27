<!DOCTYPE html>
<html>
    <div class="modal-header">
<h5 class="modal-title" id="update">Ajouter une consultation </h5>
   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<form action="{{route('historique.store')}}" method="POST">
@csrf 
<div class="container">
    <br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>date et heure du Rendez-Vous : </strong>
<input type="datetime-local" name="dateRV" class="form-control" placeholder="dateRV">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Pathologie : </strong>
<input type="text" name="pathologie" class="form-control" placeholder="pathologie">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>Actes chirurgicaux : </strong>
<input type="text" name="actes_chirurgicaux" class="form-control" placeholder="actes_chirurgicaux">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 form-group">
<strong>examens demandés : </strong>
 <input type="text" name="examens" class="form-control" placeholder="examens">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Assurrance utilisé : </strong>
<input type="text" name="assurrance" class="form-control" placeholder="assurrance">
</div>
</div>
<div class="row">
<div class="col-md-4"></div>
<div class=" col-md-4 form-group">
<strong>Remarque : </strong>
<input type="text" name="Remarque" class="form-control" placeholder="Remarque">
</div>
</div>
<div class="row">
<div class="col-md-4 text-center"></div>
<div class="form-group col-md-4">
<button type="submit" class="btn btn-success"> submit </button>
</div>
</div>
</form>
    </html>
