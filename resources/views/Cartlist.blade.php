@extends('Master')

@section('content')

<div class="custom-product">       

  <div class="col-sm-10">
  
  <div class="cartlist-wrapper">
    
    <h2>Cart List</h2>
    <a href="/ordernow" class="btn btn-success">Order Now</a><br><br> 
    <div class="">
        @foreach($data as $item)
       <div class="row search-item">
          
        <div class="col-sm-3">
        
        <a href="/product_details/{{$item->id}}">
  
        <img class="search-img" src="{{asset('asset\images')}}\{{$item->gallery}}"style="height: 200px;"> 
        

        </a>
        
        </div>
        <div class="col-sm-3">
               
        <div class="">
        <h2>{{$item->name}}</h2>
        <h5>{{$item->description}}</h5>
        </div> 
               
        </div>
        <div class="col-sm-3">        
        
        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
       
        </div>

      </div>
       @endforeach
       <a href="/ordernow" class="btn btn-success">Order Now</a><br><br> 

    </div>
  
  </div>

</div>



@endsection
