<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css"  rel="stylesheet">
    <link  href="//use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <title> @yield('title')</title>
</head>
<body>
    
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
</html>