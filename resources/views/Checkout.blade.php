@extends('Master')

@section('content')
<section id="checkout_one" class="ptb-100">
<form action="/orderplace" method="POST">
  @csrf   
  
  
   <div class="container">
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
            <div class="row">                
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="checkout-area-bg bg-white">
                        <div class="check-heading">
                            <h3>Billings Information</h3>
                        </div>
                        <div class="check-out-form">
                           
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="name">User name</label>
                                            <input type="text" name="name" required="" class="form-control" id="name"
                                                value="{{Session::get('user')['name']}}">
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="cname">Company / House Name </label>
                                            <input type="text" name="cname" class="form-control" required="" id="cname"
                                                placeholder="Company / House Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            <input class="form-control" required="" type="email" name="email" id="email"
                                                value="{{Session::get('user')['email']}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control first_null" id="country" name="country">
                                                 <option value="">Select an option...</option>
                                                <option value="India">India</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Pakisthan">Pakisthan</option>
                                                <option value="UnitedStates">UnitedStates</option>
                                                <option value="UnitedKingdom">UnitedKingdom</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="city">State/City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter Your City">
                                                
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="zip">Pin Code</label>
                                            <input type="text" class="form-control" id="zip" name="zip" required=""
                                                placeholder="Enter Your zipcode">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Full Address</label>
                                            <input type="text" name="faddress" class="form-control" id="faddress" required=""
                                                placeholder="Enter your address here..">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="messages">Additional Notes</label>
                                            <textarea rows="10" class="form-control" id="messages" name="messages"
                                                placeholder="Leave your message here"></textarea>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="order_review  box-shadow bg-white">
                        <div class="check-heading">
                            <h3>Your Orders</h3>
                        </div>
                        <div class="table-responsive order_table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{$item['product_name']}}<span class="product-qty">x 2</span>
                                        </td>
                                        <td>RS.{{$item['product_price']}}</td>
                                    </tr>
                                   
                                </tbody>
                                @endforeach
                                <tfoot>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal">RS.{{$total}}</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>RS.100 For Shipping</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class="product-subtotal">RS.{{$total+100}}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="order_review bg-white">
                        <div class="check-heading">
                            <h3>Payment</h3>
                        </div>
                        <div class="payment_method">
                            <div class="payment_option">
                                <div class="custome-radio">
                                    <input class="form-check-input" required="" type="radio" name="payment_option"
                                        id="exampleRadios3" value="Direct Bank Transfer" checked="">
                                    <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                    <p data-method="option3" class="payment-text">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option"
                                        id="exampleRadios4" value="Check Payment">
                                    <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                    <p data-method="option4" class="payment-text">Please send your cheque to Store Name,
                                        Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option"
                                        id="exampleRadios5" value="Pay via PayPal">
                                    <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                    <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your
                                        credit card if you don't have a PayPal account.</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                
            </div>
    </div>
<button class="btn btn-primary" type="submit" id="orderbutton">Place Order</button>
</form>


@endsection