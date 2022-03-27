@extends('layouts.app')
@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="contact-title">
                <h1 style="text-align: center;"> cabinet médical </h1>
                <h2 style="text-align: center;"> Bienvenue </h2>
                </div>
            <div class="card">
                <div class="card-header">{{ __('Connexion') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __(' Restez connecté') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" style="margin-left:-16%;margin-right:100%" class="form-control submit">
                                    {{ __('connecter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
 <style>
body
{
	margin:0;
	padding:0;
	text-align: center;
	background-image: url(../contactez-nous_36325-2135.jpg);
	background-size:cover;
	background-position:center;
	font-family:sans-serif;
}
        form .submit
{
	background: #000;
	border-color: transparent;
	color: #ffffff;
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 2px;
	height: 50px;
	margin-top: 20px;
}
form .submit:hover
{
	background-color: rgb(80, 80, 83);
	cursor: pointer;
}
     </style>   
<style>
.contact-title
{
	margin-top:100px;
	color: black;
	text-transform: uppercase;
	transition: all 4s ease-in-out;
}
.contact-title h1
{
	font-size:32px;
	line-height:10px;
}
.contact-title h2
{
	font-size:16px;
}
form
{
margin-top:50px;
transition: all 4s ease-in-out;	
}
input {
  display:inline-block;
  width:20px;
}
label { margin-bottom: 25px;
  display:inline-block;
  width:235px;
}
.form-control
{
	width:600px;
	background:transparent;
	border:none;
	outline:none;
	border-bottom:1px solid gray;
	color:black;
	font-size:18px;
	margin-bottom:16px;
}
input 
{
	height:45px;
}
 </style>
 <script>	//Validtion Code For Inputs

    var email = document.forms['form']['email'];
    var password = document.forms['form']['password'];
    
    var email_error = document.getElementById('email_error');
    var pass_error = document.getElementById('pass_error');
    
    email.addEventListener('textInput', email_Verify);
    password.addEventListener('textInput', pass_Verify);
    
    function validated(){
        if (email.value.length < 9) {
            email.style.border = "1px solid red";
            email_error.style.display = "block";
            email.focus();
            return false;
        }
        if (password.value.length < 6) {
            password.style.border = "1px solid red";
            pass_error.style.display = "block";
            password.focus();
            return false;
        }
    
    }
    function email_Verify(){
        if (email.value.length >= 8) {
            email.style.border = "1px solid silver";
            email_error.style.display = "none";
            return true;
        }
    }
    function pass_Verify(){
        if (password.value.length >= 5) {
            password.style.border = "1px solid silver";
            pass_error.style.display = "none";
            return true;
        }
    }
    
    </script>