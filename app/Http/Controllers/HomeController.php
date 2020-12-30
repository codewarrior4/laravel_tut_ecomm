<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController extends Controller
{
   
    public function index()
    {
        $products= Products::all()->take(3);
        return view('welcome',["products"=>$products]);
    }

    public function details($id)
    {
        $products= Products::find($id);

        return view('detail',['products'=>$products]);

    }

    public function search(Request $req)
    {
        $data= Products::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    public function addcart(Request $req)
    {
        if($req->session()->has('user')){
            DB::insert('insert into cart (user_id, product_id) values (?, ?)', [$req->session()->get('user')['id'], $req->product_id]);
            // $cart=new Cart;
            // $cart->user_id=;
            // $cart->product_id=;
            // $cart->save();

            return redirect('welcome');
        }
        else{
            return redirect('login');
        }
       
    }
    static function cartList()
    {
        $user_id=Session::get('user')['id'];
        return Cart::where('user_id',$user_id)->count();
    }

    public function cart()
    {
        $userId=Session::get('user')['id'];
        $total=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->sum('products.price');
        $products=DB::table('cart')
                    ->join('products','cart.product_id','=','products.id')
                    ->where('cart.user_id',$userId)
                    ->select('products.*','cart.id as cart_id')
                    ->get();

        return view('cart',['products'=>$products,'total'=>$total]);
    }
    public function deletecart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }

    public function order()
    {
        $userId=Session::get('user')['id'];
        $total=DB::table('cart')
            ->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$userId)
            ->select('products.*','cart.id as cart_id')
            ->sum('products.price');
            return view('order',['total'=>$total]);

    }
    public function checkout(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->address=$req->address;
            $order->payment_method=$req->payment;
            $order->payment_status="pending";

            $order->save();
            Cart::where('user_id',$userId)->delete();
        }
        
        return redirect('/welcome');
    }
    public function orders()
    {
        $userId=Session::get('user')['id'];
        $orders=DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->get();

        $total=DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$userId)
            ->select('products.*','orders.id as orders')
            ->sum('products.price');
        return view('orders',['orders'=>$orders,'total'=>$total]);
    }
}
