@extends('master')
@section('title','Login')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
</head>
<body>
    
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form_container">
        <div class="form_right">
            <h1>Login to your  Medley Account</h1><br>
            <p> </p>
            
        </div>
        <div class="form_left">
           
            <h1>Login</h1>
            <input type="email" placeholder="Email" class="form__input" name="email" /><br>
            <input type="password" placeholder="Password"  class="form__input" name="password"/ > <br>
            <button class="btn">Login</button>
            <a href="signup"> Create your account ?</a>
            </div>
            
     
        </div>
        
       
    </form>
</body>
</html>
@endsection