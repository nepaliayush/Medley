@extends('master')
@section('title','Shoes')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes</title>
</head>
<body>
    <div class="slogan">
    <h1>Shoes</h1>
    
    </div>
    
    <div class="product_display">
    @foreach($products as $item)
        <div class="shirt_display">
       
        <div class="item{{$item['id']==1?'active':''}}">
        <a href="details/{{$item['id']}} ">
            <img src="{{$item['gallery']}}" alt="" srcset="">
            <p>{{ $item->name}}</p>
        
       
        </a>
        </div>
        </div>
        @endforeach
    </div>
   
    
     
</body>
</html>
@endsection