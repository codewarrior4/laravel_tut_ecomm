@extends('layouts.base')

@section('title')
    My Orders
@endsection
<?php 

$count=1;
?>
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <p class="display-2">Orders List</p>
            
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
                            <th>Method</th>
                            <th>Status</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                        
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td><img src="{{$item->image}}" alt=""></td>
                            <td>{{$item->payment_method}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->address}}</td>
                        </tr> 
                        @endforeach
                        
                    </tbody>
                   
                </table>
                
            </div>
        </div>
    </div>
@endsection