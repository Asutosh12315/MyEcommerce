<?php 
use App\Http\Controllers\ProductController;

$total=ProductController::cartItem();



?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fab fa-shopware fa-3x"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item text-right">
          <a class="nav-link" href="/product">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item text-right">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form action="/search_product" method="GET" class="d-flex text-center">
  
      <input class="form-control me-2" type="text" name="query" placeholder="Search" aria-label="Search">
      <button class="btn btn-light" type="search">Search</button>
      </form>    
    
    </div> 
    <span class="navbar-text mynav">
    <ul class="nav navbar-nav navbar-right"> 

    
      <li>    
      <a href="/cart_list"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart Item({{$total}})</a></li>

      @if(Session::has('user'))
     
      {{Session::get('user')['name']}}

  
      <li><a  href="/logout" onclick="logOut();">Logout</a></li>        
     
      @else     

      <li><a href="/login">Login</a></li> 

      @endif 
    </ul> 
   
    </span>
    
  </div>
</nav>