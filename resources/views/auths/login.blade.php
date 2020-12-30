@extends('layouts.base')
@section('title')
Login
@endsection
@section('content')
    <div class="offset-3 col-6 mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form action="login" method="post">
                    @csrf
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
                        <button class="btn-primary btn bt-md mr-5" type="submit" >Login</button>  <a href="/register" class="text-decoration-none float-right" title="signup">Do not have an account yet?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection