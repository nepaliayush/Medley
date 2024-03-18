@extends('master')
@section('title','Shop')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class= "shop_container">
        <div class= "shop_shirt">
            
            

            <a href="{{route('shirts')}} ">
            
            <img src="images/shirt.png"  height="100px" alt="" srcset="" >
             <h1>Shirts</h1>
             
        
       
        </a>
        </div>
        <div class= "shop_pant">
        <a href="{{route('pants')}} ">
            
        <img src="images/pant.png"  height="100px" alt="" srcset="" >
        <h1>Pants</h1>
         
       
        </a>
           
        </div>
        <div class= "shop_shoes">
        <a href="{{route('shoes')}} ">
            
        <img src="images/shoes.png"  height="100px" alt="" srcset="" >  
        <h1>Shoes</h1>
       
        </a>
        </div>

    </div>
    
    
</body>
</html>
@endsection