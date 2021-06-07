<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


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


}
