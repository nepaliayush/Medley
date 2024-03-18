@extends('master')
@section('title','Product Details')
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
<script>
   function increment() {
      document.getElementById('demoInput').stepUp();
   }
   function decrement() {
      document.getElementById('demoInput').stepDown();
   }
</script>
<body>
<?php
$products
?>  
<div class="details_container">
<div class="details_left">
  
   <img src="{{$products['gallery']}}" height="600px" alt="" srcset="">
   
        
  </div>
  <div class="details_right">
  <h1>Product Details</h1>
   <h3>Name: {{$products->name}}</h3>
   <h3>Description: {{ $products->description}}</h3>
   <h3>Price: {{ $products->price}}</h3>
  
   <div class="details_button">
       
          
     <form action="{{url('addcart',$products->id) }}" method="POST">
        @csrf
       <h3> Quantity: <input id=demoInput type=number min=1 max=110 name="quantity"></h3>
        <input type="hidden" name="product_id" value={{$products['id']}}>
     <button class="btn">Add to cart</button>  <br>
     </form>    
   
   
   </div>
   <div class="details_button">
   <form action="{{url('addorder',$products->id) }}" method="POST">
        @csrf
        <h3> Quantity: <input id=demoInput type=number min=1 max=110 name="quantity"></h3>
        <input type="hidden" name="product_id" value={{$products['id']}}>
     <button class="btn">Buy Now</button>  <br>
     </form>    
       </div>
    <ul>
        <li><i class=" fa fa-thin fa-circle"></i>&nbspHigh Quality</li>
        <li><i class=" fa fa-thin fa-circle"></i>&nbspPlane Inside</li>
        <li><i class=" fa fa-thin fa-circle"></i>&nbspFor winter and summer</li>
        <li><i class=" fa fa-thin fa-circle"></i>&nbspGood/Durable Stiching</li>
        <li><i class=" fa fa-thin fa-circle"></i>&nbspMade in Nepal</li>
    </ul>
   
   </div>
   
   </div>
   
   
   
</div>
     

</body>
</html>
@endsection