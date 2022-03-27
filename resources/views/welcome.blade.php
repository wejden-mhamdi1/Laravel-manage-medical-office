<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>cabinet médical</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1.15;-webkit-text-size-adjust:100%}
            body{margin:0}a{background-color:transparent}
            [hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}
            video{max-width:100%;height:auto}
            .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
            .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
            .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <style>
            body, html {
                height: 100%;
                margin: 0;
              }
              .bgimg {
                background-image: url('image/images1.jpg');
                height: 100%;
                background-position: center;
                background-size: cover;
                position: relative;
                color: rgb(0, 0, 0);
                font-family: "Courier New", Courier, monospace;
                font-size: 25px;
              }
              hr {
                margin: auto;
                width: 40%;
              }
              .hero-image {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url('data:image/jpeg;base64,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');
                height: 30%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
              }
              .hero-text {
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                font-family: 'Berkshire Swash';font-size: 22px;
                transform: translate(-50%, -50%);
                color: black;
              }
              h1 {
                font-size:100px;
                font-family:'Pacifico', cursive;
                Text-align:center;
                Text-shadow :0 1px 0 #ccc,
                            0 2px 0 #c9c9c9,
                            0 4px 0 #b9b9b9,
                            0 5px 0 #aaa,
                            0 6px 1px rgba(0,0,0,.1),
                            0 0 5px rgba(0,0,0,.1),
                            0 1px 3px rgba(0,0,0,.3),
                            0 3px 5px rgba(0,0,0,.2),
                            0 5px 10px rgba(0,0,0,.25),
                            0 10px 10px rgba(0,0,0,.2),
                            0 20px 20px rgba(0,0,0,.15);}
        </style>
    </head>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <body class="antialiased">
            <div class="bgimg">
                <div class="hero-image">
                  <div class="hero-text">
                  <h1 style="font-family:'Berkshire Swash';margin-top: 2em;">COMING SOON</h1>
                  <p id="demo" style="font-family:'Berkshire Swash';font-size:40px;margin-bottom: 2em;"></p>
              </div>
            </div>
            <!DOCTYPE html>
 <html>
 <style>
#div1 {
  font-size:65px;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div style="text-align:center; margin-right: 9em;margin-bottom: 1em;" id="div1" class="fa"></div>
<img src="https://img.icons8.com/office/100/000000/clock--v2.png"/>
<script>
  function hourglass() {
    var a;
    a = document.getElementById("div1");
    a.innerHTML = "&#xf251;";
    setTimeout(function () {
        a.innerHTML = "&#xf252;";
      }, 1000);
    setTimeout(function () {
        a.innerHTML = "&#xf253;";
      }, 2000);
  }
  hourglass();
  setInterval(hourglass, 3000);
</script>
</body>
</html>
                <div class="bottomleft">
                  <p style="text-align:center;margin-bottom: 1em;">Hope you enjoy!!!!</p>
                </div>
              </div>
            </body>
              <script>
              // Set the date we're counting down to
              var countDownDate = new Date("May 31, 2021 09:30:00").getTime();
              // Update the count down every 1 second
              var countdownfunction = setInterval(function() {
                // Get todays date and time
                var now = new Date().getTime();
                // Find the distance between now an the count down date
                var distance = countDownDate - now;
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                // If the count down is over, write some text 
                if (distance < 0) {
                  clearInterval(countdownfunction);
                  document.getElementById("demo").innerHTML = "DONE";
                  window.location = "http://127.0.0.1:8000/welcom";}
              }, 1000);
              </script>              
 </html>