@extends('layouts.base')
@section('title')
    Search
@endsection

@section('content')
<div class="trending-wrapper">
    <h4 class="pt-5">Search Results for projects</h3>
    <div class="row">

        @foreach ($products as $item)
        <div class="card col-md-3 offset-md-1 mb-2 col-sm-10 offset-sm-1">
           <a href="detail/{{$item->id}}"> <img class="card-img-top" src="{{$item->image}}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$item->name}}</h5>
                <h5 class="card-title">{{$item->description}}</h5>
                <h5 class="card-title">${{$item->price}}</h5>
            
            </div>
           </a>
        </div>
            
        @endforeach
    </div>
as
</div>
@endsection