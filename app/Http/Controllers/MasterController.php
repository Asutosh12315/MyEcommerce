<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class MasterController extends Controller
{
    public function viewHome()
    {

     $product=Product::all();
     return view('Home',['products'=>$product]);

      
    }
  

}
