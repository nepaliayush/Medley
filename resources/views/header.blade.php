<?php
use App\Models\Cart;
use  App\Http\Controllers\Controller;
use  App\Http\Controllers\CartController;
use  App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Auth;
//$count=0;
$count=CartController::cartItem();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title></title>
    
</head>
<body>
    <header>
    <nav>
        <div class="logo">
        <label >Medley</label>
        </div>
          
                
                    <div class="nav">
                    <ul class="nav__links">
                   <li><a href="/">Home</a></li>
                   
                   <li>
                       <a href="">Mens</a>
                       <ul>
                            <li><a href="{{route('shirts')}}">Shirt</a></li>
                            <li><a href="{{route('pants')}}">Pants</a></li>
                            <li><a href="{{route('shoes')}}">Shoes</a></li>
                           
                        </ul>
                    </li>
                   <li><a href="about">About Us</a></li>
                 
                   @if(isset( Auth::user()->email ))
                  
                    <li><a href="{{route('cart') }}"><i class="fa fa-solid fa-cart-arrow-down"></i>({{$count}})</a></li>
                    
                    <li><a><i class="fa fa-solid fa-user"></i>&nbsp&nbsp{{ Auth::user()->name }} </a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                   
                   @else
                    <li><a href="login">Login</a></li>
                    <li><a href="signup">Signup</a></li>
                
                   @endif
                   
                    
                    </div> 
                   
                       
                            
                        </div>
                   
                 </ul>
    </nav>
    </header>

</body>
</html>



