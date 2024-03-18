@extends('master')
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>
<body>
<div class="main">
        <div class="main-left">
         
          <div class="banner">
            <div class="f-text">
              <h1>
                FASHION
                <br />
                <span>MADE</span>
                <br />
                SIMPLE.
              </h1>
            </div>
            <a href="/shop "class="btn">SHOP NOW</a>
          </div>
        </div>
        <div class="main-right">
          <img src="images/home.jpg" />
        </div>
      </div>
</div>
</body>
</html>
@endsection