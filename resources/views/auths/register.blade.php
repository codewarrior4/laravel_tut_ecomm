@extends('layouts.base')
@section('title')
Register
@endsection
@section('content')
    <div class="offset-3 col-6 mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form action="register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required id="name" placeholder="code warrior" >
                        <small id="error" class="form-text text-muted"></small>
                      </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" required id="email" placeholder="code@warrior.com" >
                      <small id="error" class="form-text text-muted"></small>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required id="password">
                        <small id="error" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <button class="btn-primary btn bt-md mr-5" type="submit" >Register</button>  <a href="" class="text-decoration-none float-right" title="Sign">Already have an account yet?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection