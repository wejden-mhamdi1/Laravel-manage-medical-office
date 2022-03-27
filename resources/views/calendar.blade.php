@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a class="m-r-15 text-muted update" data-toggle="modal" data-id="'.$value->id.'" data-target="#update">
            add </a><a class="btn btn-success" href="/rendez-vous/add"> Ajouter rendez-vous</a>
        </div>
        </div>
        </div>
 <div id="calendar"></div>
 <!-- Modal Update-->
	<div class="modal fade" id="update" tabindex="-1" aria-labelledby="update" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="update">Fixer un rendez-vous</h5>
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
                                      <br/>
                                      <form method="post" action="{{url('rendez-vous/create')}}">
                                        @csrf
                                        <div class="row">
                                          <div class="col-md-4"></div>
                                          <div class="form-group col-md-4">
                                            <label for="patient_name">Patient name :</label>
                                            <input type="text" class="form-control" name="patient_name">
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-4"></div>
                                          <div class="form-group col-md-4">
                                            <label> Date : </label>  
                                            <input class="form-control"value="" type="date" name="date">   
                                         </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-4"></div>
                                          <div class="form-group col-md-4">
                                            <label> Time : </label>  
                                            <input class="form-control time" value="" id="time" name="time">   
                                         </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="form-group col-md-4">
                                              <label for="note">Note :</label>
                                              <input type="text" class="form-control" name="note">
                                            </div>
                                          </div>
                                        <div class="row">
                                          <div class="col-md-4"></div>
                                          <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-success">Fixer</button>
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
	</div>
	<!-- End Modal Update-->
</div>
<script>

$(document).ready(function () {
    $.ajaxSetup({
        headers:{'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')}});
    var calendar = $('#calendar').fullCalendar({
        editable:true,
        header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
        },
        events:'/rendez-vous',
        selectable:true,
        selectHelper: true,
        displayEventTime: true,
        select:function(patient_name,date,time,note)
    
        {
            data = document.querySelector('#update');
            
                $.ajax({
                    url: SITEURL + "rendez-vous/create",
                    data: {
                        patient_name: patient_name,
                        date: date,
                        time: time,
                        note: note,
                        type: 'create'
                    },
                    type: "POST",
                    success: function (data) {
                        displayMessage("Event created.");
                        $('¤calendar').fullCalendar('renderEvent', {
                        id: id,
                        patient_name: patient_name,
                        date: date,
                        time: time,
                        note: note,
                        }, true);
                        calendar.fullCalendar('unselect');
                    }
                });
        },
        eventDrop: function (event, delta) {
            $.ajax({
                url: SITEURL + '/rendez-vous/update',
                data: {
                    patient_name: patient_name,
                        date: date,
                        time: time,
                        note: note,
                    type: 'edit'
                },
                type: "POST",
                success: function (response) {
                    displayMessage("Event updated");
                }
            });
        },
        eventClick: function (event) {
            var eventDelete = confirm("Are you sure?");
            if (eventDelete) {
                $.ajax({
                    type: "POST",
                    url: SITEURL + 'calendar-crud-ajax',
                    data: { 
                        id: event.id,
                        type: 'delete'},
                    success: function (response) {
                        calendar.fullCalendar('removeEvents', id);
                        displayMessage("Event removed");
                    }
                });
            }
        }
    });
});
function displayMessage(message) {
    toastr.success(message, 'Event');            
}




</script>



</body>
</html>
@endsection