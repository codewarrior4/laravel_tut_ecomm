<?php  
    
    use App\Http\Controllers\HomeController;
    $total=0;
    if(Session::has('user'))
    {
        $total=HomeController::cartList();
    }
    
?>
<nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#205083;">
    <a class="navbar-brand" href="/welcome" class="font-weight-bold display-2">CW Commerce</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active"> <a class="nav-link" href="/welcome">Home</a> </li>
            <li class="nav-item"><a class="nav-link" href="/welcome">Products</a></li>
            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            
           
            
           
            <form action="/search" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" style="width:500px;" name="query" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if(session()->has('user'))
                 <li class="nav-item"><a class="nav-link" href="" onclick="e.preventDefault()">{{Session::get('user')['name']}}</a></li>
                <li class="nav-item"><a class="nav-link" href="/cart">Cart ({{$total}})</a></li>
                 <li class="nav-item"><a class="nav-link" href="/orders">Orders</a></li>
                 <li class="nav-item"><a class="nav-link" href="/profile">Account</a></li>
                <li class="nav-item"><a class="nav-link" href="/logout">Logout</a></li>
            @else
                 <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
            @endif
        </ul>

    </div>
</nav>