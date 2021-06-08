@extends('Master')

@section('content')

<section id="login_area" class="ptb-100 custom-registration">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="account_form">
                        <h3>Register</h3>
                        <form action="new_registration" method="POST">
                            @csrf

                            <div class="results">

                                @if(Session::get('success'))

                                <div class="alert alert-success">

                                    {{Session::get('success')}}

                                </div>
                                 @endif

                                @if(Session::get('failed'))

                              <div class="alert alert-danger">

                                {{Session::get('failed')}}

                              </div>

                                @endif
                            </div>

                            <div class="default-form-box">
                                <label>Username <span>*</span></label>                                
                                <input type="text" name="name"  id="name" class="form-control">
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>

                            </div>
                            <div class="default-form-box">
                                <label>Email <span>*</span></label>
                                <input type="text" name="email"  id="email" class="form-control">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>

                            </div>
                            <div class="default-form-box">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="password"  id="password" class="form-control">
                                <span class="text-danger">@error('password'){{$message}}@enderror</span>

                            </div>
                           
                                <button class="btn btn-primary" id="mybutton" type="submit">Register</button>
                                <a href="/login" class="btn btn-primary" id="mybutton">Login</a>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection