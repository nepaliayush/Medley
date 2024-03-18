@extends('master')
@section('title','Cart')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
</head>

<div class="slogan">
    <h1>Cart </h1>
    
    </div>
     <div class='cart'>
    
     @foreach($cartitems as $item)
        <div class="cart_display">
            
       
        <div class="item{{$item['id']==1?'active':''}}">
        <a href="details/{{$item['id']}} ">
            <img src="{{$item['products_image']}}" height="200px" alt="" srcset="">
            
        </a>

        <div class="cart_left_display">
        <p>Product:{{ $item->products_name}}</p>
            <p>Quantity:{{ $item->quantity}}</p>
            <p>Price:{{ $item->price}}</p>
            <div class="remove_button">
            <a href="{{url('/removecart',$item->id)}}"> <button class="btn">Remove from cart</button></a>
            </div>
            
        </div>
            
        </div>
        </div>
        @endforeach
     </div>
     

 
   
</body>
</html>
@endsection