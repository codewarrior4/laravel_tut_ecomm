@extends('layouts.base')

@section('title')
    Checkout
@endsection
<?php 

$count=1;
?>
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">
            <p class="display-2">Checkout</p>
            
        </div>
        <div class="col-sm-10 col-offset-sm-1">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" width="90">
                    <thead class="thead-light">
                       
                    </thead>
                    <tbody>
                        <tr>
                            <td>Amount</td>
                            <td>{{$total}}</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td>{{"0"}}</td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td>{{Session::get('user')['name']}}</td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td>{{$total +10}}</td>
                        </tr>
                        
                    </tbody>
                   
                </table>
                
            </div>
            <div class="row">
                <form action="/checkout" method="POST">
                        @csrf
                        <div class="form-group">
                            <textarea id="my-textarea" name="address" class="form-control p-2" name="address" cols="50" placeholder="Enter Delivery Address" rows="3"></textarea>
                        </div>
                   
                    <div class="form-check">
                        <label for="payment">Select Payment Method</label>
                        <input type="radio" value="online" style="display:block;width:25px;height:25px;border-radius: 25%;" name="payment" id="payment"><span>Online</span>
                        <input type="radio" value="cash" style="display:block;width:25px;height:25px;border-radius: 25%;" name="payment" id="payment">Pay on Delivery
                    </div>
                    <div class="form-group">
                        <button class="ml-2 mt-3 btn btn-success" type="submit">Checkout</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection