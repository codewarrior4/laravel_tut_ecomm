@extends('layouts.base')

@section('title')
    Home
@endsection

@section('content')
    <div class="container-fluid">
        <div id="my-carousel" class="carousel slide mt-2" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
                <li data-target="#my-carousel" data-slide-to="1"></li>
                <li data-target="#my-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($products as $item)
                     <div class="carousel-item {{$item->id=='1'?'active':''}}">
                        <img class="d-block w-100 slider-img" src="{{$item->image}}" alt="">
                        <div class="slider-text carousel-caption d-none d-md-block">
                            <h5 class="text-dark">{{$item->name}}</h5>
                            <p class="text-dark">{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach
               
            
            </div>
            <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="trending-wrapper">
            <h3>Trending Products</h3>
            <div class="row">

                @foreach ($products as $item)
                <div class="card col-md-3 offset-md-1 mb-2 col-sm-10 offset-sm-1">
                   <a href="detail/{{$item->id}}"> <img class="card-img-top" src="{{$item->image}}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                    
                    </div>
                   </a>
                </div>
                    
                @endforeach
            </div>

        </div>
    </div>  
    
@endsection