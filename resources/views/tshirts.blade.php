@extends('master')
@section('title','Shirts')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt</title>
</head>
<body>
    <div class="slogan">
    <h1>Shirts </h1>
    
    </div>
    
    <div class="product_display">
    @foreach($products as $tshirt)
        <div class="tshirt_display">
        <div class="tshirt{{$tshirt['id']==1?'active':''}}"><img src="{{$tshirt['gallery']}}" alt="" srcset=""></div>
        <p>{{ $tshirt->name}}</p>
      
        </div>
        @endforeach
    </div>
   
    
     
</body>
</html>
@endsection