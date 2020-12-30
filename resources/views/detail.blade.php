@extends('layouts.base')

@section('title')
    {{$products->name}}
@endsection

@section('content')
      
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-sm-6">
                <img class="img-fluid" style="width: 100%;" src="{{URL::asset($products->image)}}"  alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h2 class="text-capitalize">{{$products->name}}</h2>
                <h3 class="text-capitalize">Price : ${{number_format($products->price,2 )}}</h3>
                <h4 class="text-capitalize">Details: {{$products->description}}</h4>
                <h4 class="text-capitalize">Category: {{$products->category}}</h4>
                <div class="row mt-2 ml-3">
                    <form action="/addtocart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$products->id}}">
                        <button class="btn btn-primary float-left mr-5">Add to cart</button>
                    </form>
                </div>
                <div class="row mt-3">
                    
                    <button class="btn btn-success float-right ml-5">Buy now</button>
                </div>
            </div>
        </div>
    </div>
@endsection