@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="w3-container w3-teal">
               <h1 style="color:Tomato;text-align:center; margin-bottom: 0.5em;">Bonjour {{ Auth::user()->name }}</h1>
               <h5 style="text-align:center; margin-bottom: 2em;">Quel type de Certificat désirez vous rédiger?</h5>
               <!DOCTYPE html>
               <html>
               <head>
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <style>   
               * {
                 box-sizing: border-box;
               }
               /* Create a column layout with Flexbox */
               .row {
                 display: flex;
               }
               
               /* Left column (menu) */
               .left {
                 flex: 35%;
                 padding: 15px 0;
               }
               
               .left h2 {
                 padding-left: 8px;
               }
               
               /* Right column (page content) */
               .right {
                 flex: 65%;
                 padding: 15px;
               }
               
               /* Style the search box */
               #mySearch {
                 width: 100%;
                 font-size: 18px;
                 padding: 11px;
                 border: 1px solid #ddd;
               }
               /* Style the navigation menu inside the left column */
               #myMenu {
                 list-style-type: none;
                 padding: 0;
                 margin: 0;
               }
               #myMenu li a {
                 padding: 12px;
                 text-decoration: none;
                 color: black;
                 display: block
               }
               #myMenu li a:hover {
                 background-color: #eee;
               }
               </style>
               </head>
               <body>
               <div class="row">
                 <div class="left" style="background-color:#bbb;">
                   <h2>Menu</h2>
                   <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
                   <ul id="myMenu">
                     <li><a href="#1">Certicat de Repos</a></li>
                     <li><a href="#2">Certicat de dispense sportive</a></li>
                     <li><a href="#3">Certicat de présence</a></li>
                     <li><a href="#4">Certicat prénuptial</a></li>
                   </ul>
                 </div>
                 <div class="right" style="background-color:#ddd;">
                 <a name="1">
                  <form method="POST" action="{{url('Certif/store')}}">
                    @csrf
                    <h3 class="titre">Certificat Médical</h3>
                     <div class="row"> <p> Je soussigné, Docteur</p>
                      <div class="form-group">
                    <input type="text" name="nommedecin">
                      </div>
                      <p> Certifie que létat de santé de M/Mme/Mlle</p>
                      <div class="form-group">
                      <input type="text" name="nompatient" >
                      </div>
                     <p> Nécessite un repos de</p>
                     <div class="form-group">
                      <input type="text" maxlength="9" size="4px" name="nbjour" >
                     </div>
                      <p> , sauf complications, et ce à dater du : </p>
                      <div class="form-group">
                      <input type="date" name="date"></div>
                     </div>
                     <div style="right: 10000050em" class="container">
                      <p> Date  :</p>
                      <div class="form-group">
                      <input type="date" name="daterepos">
                      </div>
                      <p> Cachet & Signature  :</p>
                      <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <br>
                                <?php echo isset($msg)?$msg:''; ?>
                                <div class="form-group" name="sig" id="sig"></div>
                                <br>
                                <button type="button" class="btn btn-danger" id="reset-btn">Clear</button>
                            </div>
                        </div>
                    </div>
                     </div>
                      <br> <br>
                      <div class="form-group">
                 <button type="submit" id="btn-save">Envoyer</button>
                 <input type="submit" value="Imprimer">
                 <input type="reset" value="Effacer">
                </div>
                  </form>
                 </a>
                 <a name="2">
                  <h3 class="titre">Certificat Médical</h3>
                  <form method="POST" action="{{url('Certif/store')}}">
                    @csrf
        <div class="row"> <p> Je soussigné, Docteur</p>
       <input type="text" name="nommedecin" id="nommedecin">
         <p> Certifie que létat de santé de M/Mme/Mlle</p>
         <input type="text" name="nompatient" id="nompatient">
        <p> ne permet pas de faire du sport pendant</p>
         <input type="text" maxlength="4" size="1px" name="nbjour" id="nbjour">
         <p>, sauf complications, et ce à dater du : </p>
         <input type="date" name="date" id="date"></div>
         <p> Date  :</p>
         <input type="date" name="daterepos" id="daterepos">
         <p> Cachet & Signature  :</p>
         <input type="text" name="sig" id="sig">
         <br> <br>
    <button type="submit">Envoyer</button>
    <input type="submit" value="Imprimer">
    <input type="reset" value="Effacer">
     </form>
    </a>
    <a name="3">
      
</a>
<a name="4">
 
</a>
                      <style>
                         body{
                   margin: 0;
                    padding: 0;
                    background-image: url(image.jpg);
                    -webkit-background-size: cover ;
                    background-size: cover;}
               
                 .titre {
                    margin: 0;
                    padding: 0 0 20px;
                    font-weight: bold;
                    color: black;
                    text-align: center;
                 }
                .form input[type=reset]{
                    border: none;
                    height: 40px;
                    outline: none;
                    font-size: 15px;
                    background-color: rgb(80, 78, 78);
                    cursor: pointer;
                    border-radius: 20px;
                 }
                     </style>
                 </div>
               </div>
               <script>
               function myFunction() {
                 var input, filter, ul, li, a, i;
                 input = document.getElementById("mySearch");
                 filter = input.value.toUpperCase();
                 ul = document.getElementById("myMenu");
                 li = ul.getElementsByTagName("li");
                 for (i = 0; i < li.length; i++) {
                   a = li[i].getElementsByTagName("a")[0];
                   if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                     li[i].style.display = "";}
                   else {li[i].style.display = "none";}}}
               </script>
               <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
 <script>
    $(document).ready(() => {
        var sig = document.getElementById('sig');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        sig.appendChild(canvas);
        $("#canvas").attr('height', $("#sig").outerHeight());
        $("#canvas").attr('width', $("#sig").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });
        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });
        $('#canvas').mouseup(function(e) {paint = false;});
        $('#canvas').mouseleave(function(e) {paint = false;});
        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;
        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);}
        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];});
        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#sign");
            anchor.val(img);
            $("#sig").submit();
        });
        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0};
        var lastPos = mousePos;
        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);
        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);
        canvas.addEventListener("touchmove", function(e) {
            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);

        // Get the position of a touch relative to the canvas
        function getTouchPos(sig, touchEvent) {
            var rect = sig.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top};}
        var elem = document.getElementById("canvas");
        var defaultPrevent = function(e) {e.preventDefault();}
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);
        function redraw() {
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {context.moveTo(clickX[i - 1], clickY[i - 1]);}
                else {context.moveTo(clickX[i] - 1, clickY[i]);}
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })
 </script>
 <style>
  #sig{
      position: relative;
      border: 2px dashed grey;
      height:150px;
      width:300px;
  }
</style>
               </body>
               </html>               
               @endsection