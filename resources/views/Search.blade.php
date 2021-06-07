@extends('Master')

@section('content')


<div class="custom-product">       

  <div class="col-sm-4">
  
  <a href="#">Filter</a>
  
  </div>

  <div class="col-sm-4">
  
  <div class="trending-wrapper">
    
    <h4>Result For Products</h4>
    
    <div class="">
     
       <div class="search-item">
       <a href="/details/">
  
      <img class="search-img" src="{{asset('asset\images')}}\"style="height: 200px;"> 
      <div class="">
      <h2></h2>
      <h5></h5>
      </div> 
  
      </a>    
      </div>


    </div>
  
  </div>

</div>




@endsection