@extends('layouts.app')
@section('content')
<div class="pull_left">
<h2 style="text-align:center">Historique du patient </h2> 
</div>
<link rel="" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<a class="btn btn-success" data-toggle="modal" href="/historique/create" data-id="'.$value->id.'" data-target="#update" style="margin-bottom: 1.5em;">Nouvelle consultation</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class='alert alert-success'>
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
    <th style="text-align: center "width="10px"> </th>
    <th style="text-align: center ">dateRV</th>
    <th style="text-align: center ">pathologie</th>
    <th style="text-align: center ">actes chirurgicaux</th>
    <th style="text-align: center ">examens</th>
    <th style="text-align: center ">assurrance</th>
    <th style="text-align: center ">Remarque</th>
    <th style="text-align: center "width="20px"> </th>
    <th style="text-align: center "width="20px"> </th>
    <th style="text-align: center" width="250px">Action</th>
</tr>
@foreach($historique as $Historique)
<tr>
<td>{{ ++$i }} </td>
<td>{{$Historique->dateRV}}</td>
<td>{{$Historique->pathologie}}</td>
<td>{{$Historique->actes_chirurgicaux}}</td>
<td>{{$Historique->examens}}</td>
<td>{{$Historique->assurrance}}</td>
<td>{{$Historique->Remarque}}</td>
<td>
    <form action="{{route('historique.show',$Historique->id)}}" method="POST">
    <a class="nav-link" href="/Certif">Certificat</a></form>
    </td>
    <td>
        <form action="{{route('historique.show',$Historique->id)}}" method="POST">
        <a class="nav-link" href="/add-ordonnance">Ordonnance</a></form>
        </td>
<td>
<form action="{{route('historique.destroy',$Historique->id)}}" method="POST">
<a class="btn btn-info" data-toggle="modal" href="{{ route('historique.show',$Historique->id) }}" data-id="'.$value->id.'" data-target="#update1">show</a>
<a class="btn btn-success" data-toggle="modal" href="{{ route('historique.edit',$Historique->id) }}" data-id="'.$value->id.'" data-target="#update2">Edit</a>
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
@endsection