<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css"  id="animationcss" href="{{URL::asset('css/animation.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/responsive.css')}}">
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <title>CWCommerce - @yield('title')</title>
    <style>
        img.slider-img{
            height:400px;
        }
        .slider-text{
            background-color: #35443585 !important;
        }
    </style>
</head>
<body>
    
    {{View::make('incs.header')}}
    <div class="container-fluid">
        @yield('content')  
    </div>
    {{View::make('incs.footer')}}
</body>
</html>