@extends('layouts.app')
@section('content')
<div class="pull_left">
<h2 style="text-align: center">Liste des patients</h2>
<link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</div>
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<a class="btn btn-success" data-toggle="modal" data-id="'.$value->id.'" data-target="#update">Créer nouveau patient</a>
</div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Recherche..." title="Type in a name">
</div>
</div>
@if ($message = Session::get('success'))
<div class='alert alert-success'>
<p>{{ $message }} </p>
</div>
@endif
<table class="table table-bordered" id="myTable">
<tr>
<th style="text-align: center "width="10px"> </th>
<th onclick="sortTable(1)" style="text-align: center ">nom</th>
<th onclick="sortTable(2)" style="text-align: center ">prenom</th>
<th style="text-align: center ">CIN</th>
<th style="text-align: center ">date Naissance</th>
<th style="text-align: center ">N° telephone</th>
<th style="text-align: center ">email</th>
<th style="text-align: center ">adresse</th>
<th style="text-align: center ">sexe</th>
<th style="text-align: center "width="50px"> </th>
<th style="text-align: center " width="250px">Action</th>
</tr>
@foreach($patients as $Patient)
<tr>
<td>{{ ++$i }} </td>
<td>{{$Patient->nom}}</td>
<td>{{$Patient->prenom}}</td>
<td>{{$Patient->CIN}}</td>
<td>{{$Patient->dateNaissance}}</td>
<td>{{$Patient->telephone}}</td>
<td>{{$Patient->email}}</td>
<td>{{$Patient->adresse}}</td>
<td>{{$Patient->sexe}}</td>
<td>
    <form action="{{route('patients.show',$Patient->id)}}" method="POST">
    <a class="nav-link" href="/historique">historique</a></form>
    </td>
<td>
<form action="{{route('patients.destroy',$Patient->id)}}" method="POST">
<a class="btn btn-info" data-toggle="modal" href="{{ route('patients.show',$Patient->id) }}" data-id="'.$value->id.'" data-target="#update2">show</a>
<a class="btn btn-success" data-toggle="modal" href="{{ route('patients.edit', $Patient->id) }}" data-id="'.$value->id.'" data-target="#update1">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
              <!-- Modal Update-->
              <div class="modal fade" id="update" tabindex="-1" aria-labelledby="update" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="update">Add new patient</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                              {{ csrf_field() }}
                      <div class="modal-body">
                        <input type="hidden" class="form-control" id="e_id" name="id" value=""/>
                        <div class="modal-body">
                                            @csrf
                                                <div class="container">
                                                  <form action="{{ route('patients.store') }}" method="POST">
                                                    @csrf                                 
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>Patient Name : </strong>
                                                    <input type="text" name="nom" class="form-control" placeholder="nom">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>Prenom : </strong>
                                                    <input type="text" name="prenom" class="form-control" placeholder="prenom">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>CIN : </strong>
                                                    <input type="text" name="CIN" class="form-control" placeholder="CIN">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>Date de naissance : </strong>
                                                    <input class="form-control" type="date" id="dateNaissance" name="dateNaissance" placeholder="dateNaissance">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>Num de telephone : </strong>
                                                     <input type="text" name="telephone" class="form-control" placeholder="telephone">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                    <strong>Email : </strong>
                                                    <input type="text" name="email" class="form-control" placeholder="email">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="form__label">
                                                      <strong>Adresse : </strong>
                                                    <input type="text" name="adresse" class="form-control" placeholder="adresse">
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4"></div>
                                                        <div class="form__label">
                                                          <strong>Sexe : </strong>
                                                        <input type="text" name="sexe" class="form-control" placeholder="sexe">
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="form__label">
                                                              <strong>Allergies : </strong>
                                                            <input type="text" name="allergies" class="form-control" placeholder="allergies">
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4"></div>
                                                                <div class="form__label">
                                                                  <strong>Comorbidités : </strong>
                                                                <input type="text" name="comorbidités" class="form-control" placeholder="comorbidités">
                                                                </div>
                                                                </div>
                                                            <div class="row">
                                                                <div class="col-md-4"></div>
                                                              <div class="form__label">
                                                                <strong>Maladies chroniques dans la famille : </strong>
                                                                <input type="text" name="maladies" style=" margin-bottom: 1em;" class="form-control" placeholder="maladies">
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
                        </div>
                        <!-- form add end -->
                      </div>
                      </div>
                  </div>
              </div>
              <!-- End Modal Update-->
              <!-- Modal Update-->
              <div class="modal fade" id="update1" tabindex="-1" aria-labelledby="update1" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="update1">Modify patient </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                              {{ csrf_field() }}
                      <div class="modal-body">
                        <input type="hidden" class="form-control" id="e_id" name="id" value=""/>
                        <div class="modal-body">     
                        </div>
                      </div></div>
                </div></div>
                        <!-- form add end -->
                        <!-- Modal Update-->
                        <div class="modal fade" id="update2" tabindex="-1" aria-labelledby="update2" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                        {{ csrf_field() }}
                                <div class="modal-body">
                                  <input type="hidden" class="form-control" id="e_id" name="id" value=""/>
                                  <div class="modal-body">     
                                  </div>
                                </div></div>
                          </div></div>
                                  <!-- form add end -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Back to the Top</button>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  * { box-sizing: border-box; }
      #myInput {
      background-image: url('/css/searchicon.png');
      background-position: 10px 10px;
      background-repeat: no-repeat;
      float: right;*
      width: 100%;
      font-size: 16px;
      padding: 12px 20px 12px 40px;
      border: 1px solid #ddd;
      margin-bottom: 12px;}
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
border-radius: 4px;}
 #myBtn:hover {background-color: #555;}
</style>
  <script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = (tr[i].getElementsByTagName("td")[1]);
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  //Get the button
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (rows[i].getElementsByTagName("TD")[0].innerHTML.toLowerCase() <rows[i + 1].getElementsByTagName("TD")[0].innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
</head>
</html>
@endsection
