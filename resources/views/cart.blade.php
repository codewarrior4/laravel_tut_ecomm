@extends('layouts.base')

@section('title')
    Cart List
@endsection
<?php 

$count=1;
?>
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <p class="display-2">Cart List</p>
            
        </div>
        <div class="col-sm-10 col-offset-sm-1">
            <div class="table-responsive">
                <table class="table table-light" width="90">
                    <caption>Total : ${{number_format($total,2)}}</caption>
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                        
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td><img src="{{$item->image}}" alt=""></td>
                            <td><a href="deletecart/{{$item->cart_id}}" class="btn btn-danger">Remove</a></td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                   
                </table>
                
            </div>
            <div class="row mt-5 mb-5">
                <a href="/order" class="btn btn-success">Proceed To checkout</a>
            </div>
        </div>
    </div>
@endsection