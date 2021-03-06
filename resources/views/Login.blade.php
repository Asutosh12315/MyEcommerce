@extends('Master')
@section('content')

<div class="container custom-login">

<div class="row">

<div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12 " >
<h2>Login</h2>
<form action="auth_check" method="POST">
  @csrf

  <div class="results">
  @if(Session::get('failed'))

  <div class="alert alert-danger">

    {{Session::get('failed')}}

  </div>

  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <span class="text-danger">@error('email'){{$message}}@enderror</span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span class="text-danger">@error('password'){{$message}}@enderror</span>
  </div>
 
  <button type="submit" class="btn btn-primary ">Login</button>
  <a href="/register" class="btn btn-primary">Sign Up</a>

</form>
</div>

</div>

</div>


@endsection



