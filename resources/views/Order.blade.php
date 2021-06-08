@extends('Master')

@section('content')

<div class="custom-product">       

  <div class="col-sm-10">
  
  <div class="trending-wrapper">
    
    <h2 class="text-center">Order List</h2>
    <div class="">
        @foreach($orders as $item)
       <div class="row search-item cart-list-divider">
          
        <div class="col-sm-3">
        
        <a href="/product_details/{{$item->id}}">
  
        <img class="search-img" src="{{asset('asset\images')}}\{{$item->gallery}}"style="height: 150px;"> 
        

        </a>
        
        </div>
        <div class="col-sm-3">
              
        <div class="">
        <h3>{{$item->product_name}}</h3>
        <h5>Delivery Status : {{$item->status}}</h5>
        <h5>Payment Status : {{$item->payment_status}}</h5>
        <h6>Payment Method : {{$item->payment_option}}</h6>
        <h6>Delivery Address : {{$item->faddress}}</h6>
        <h6>Delevered To : {{$item->name}}</h6>
        <h6>Ordered On : {{$item->created_at}}</h6>
       
        </div> 
               
        </div>
        <div class="col-sm-3">        
        
       
        </div>

      </div>
       @endforeach
   

    </div>
  
  </div>

</div>





@endsection