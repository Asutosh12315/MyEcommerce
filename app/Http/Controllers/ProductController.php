<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{

public function index()
{
    
 $product=Product::all();
 return view('Product',['products'=>$product]);


}
public function viewProductSingle($id)
{
    $product=Product::find($id);

    return view('Productsingle',['products'=>$product]);
    
}
public function addToCart(Request $request)
{
    if ($request->session()->has('user')) {
        
        $cart= new Cart;
        $cart->product_id=$request->product_id;
        $cart->product_name=$request->product_name;
        $cart->product_price=$request->product_price;
        $cart->user_id=$request->session()->get('user')['id'];
        $cart->save();

        return back();

    }else{

        return redirect('/login');
    }
    
}
public static function cartItem()
{

    $userID=Session::get('user')['id'];
    return Cart::where('user_id',$userID)->count();

}

public function searchProduct(Request $request)
{
   $data=Product::where('name','like','%'.$request->input('query').'%')
    ->get();

     return view('Search',['data'=>$data]);
}

public function cartList()
{
    $userID=Session::get('user')['id'];
    $product=DB::table('carts')
    ->join('products','carts.product_id','products.id')
    ->select('products.*','carts.id as cart_id')
    ->where('carts.user_id',$userID)
    ->get();

    return view('Cartlist',['data'=>$product]);
}

public function removeFromCart($id)
{
    
   Cart::find($id)
   ->delete();

    return back();
}
public function checkOut()
{
    $userID=Session::get('user')['id'];

    $total=DB::table('carts')
    ->join('products','carts.product_id','products.id')   
    ->where('carts.user_id',$userID)
    ->sum('products.price');

    $product=Cart::all();
    return view('Checkout',['total'=>$total,'product'=>$product]);
    

}
public function orderPlace(Request $request)
{
    $userID=Session::get('user')['id'];

    $allCartItem=Cart::where('user_id',$userID)->get();

    foreach ($allCartItem as $cart) { 

    $order= new Order;

    $order->product_id=$cart['product_id'];
    $order->product_name=$cart['product_name'];
    $order->user_id=$cart['user_id'];
    $order->name=$request->name;
    $order->cname=$request->cname;
    $order->email=$request->email;
    $order->city=$request->city;
    $order->zip=$request->zip;
    $order->faddress=$request->faddress;
    $order->messages=$request->messages;
    $order->status="undelivered";
    $order->payment_option=$request->payment_option;
    $order->payment_status="pending";
    $result=$order->save();

    }
    if ($result) {
        
        Cart::where('user_id',$userID)->delete();
        return back()->with('success','your order has been placed');
    }else{

        return back()->with('failed','something went wrong !');
    }  

   }

   public function myOrders()
   {
    
    $userID=Session::get('user')['id'];

    $orders=DB::table('products')
    ->join('orders','products.id','orders.product_id')
    ->where('orders.user_id',$userID)
    ->get();

    return view('Order',['orders'=>$orders]);

   }

}
