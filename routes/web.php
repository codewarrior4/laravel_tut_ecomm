<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\product;


Route::get('/welcome',[HomeController::class,'index']);

Route::view('/login','auths/login');
Route::view('/register','auths/register');

Route::post('/login',[User::class,'login']);
Route::post('/register',[User::class,'register']);

Route::get('/detail/{id}',[HomeController::class,'details']);
Route::get('/search',[HomeController::class,'search']);
Route::get('/order',[HomeController::class,'order']);
Route::get('/cart',[HomeController::class,'cart']);
Route::get('/orders',[HomeController::class,'orders']);
Route::get('/deletecart/{id}',[HomeController::class,'deletecart']);
Route::post('/addtocart',[HomeController::class,'addcart']);
Route::post('/checkout',[Homecontroller::class,'checkout']);

Route::get('logout',function (){
    if(session()->has('user'))
    {
       Session::forget('user');

    }
    return redirect('login');
});