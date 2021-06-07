<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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


}
