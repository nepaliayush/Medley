@extends('master')
@section('title','Signup')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

   
    <form method="POST" action="/signup/store" >
        @csrf
        <div class="form_container">
        <div class="form_right">
            <h1>Create your Medley Account</h1><br>
            <p> </p>
            
        </div>
        <div class="form_left">
           
            <h1>Sign Up</h1>
            <input type="text" placeholder="Name" class="form__input" name="name" /><br>
            <input type="email" placeholder="Email" class="form__input" name="email"/><br>
            <input type="password" placeholder="Password"  class="form__input" name="password"/ > <br>
            <button class="btn">Sign Up</button>
            </div>
            
     
        </div>
        
       
    </form>
</body>
</html>
@endsection