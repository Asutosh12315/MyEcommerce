@extends('Master')

@section('content')
<section id="checkout_one" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="checkout-area-bg bg-white">
                        <div class="check-heading">
                            <h3>Billings Information</h3>
                        </div>
                        <div class="check-out-form">
                            <form method="post">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="fname">First name</label>
                                            <input type="text" required="" class="form-control" id="fname"
                                                placeholder="First name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="lname">Last name</label>
                                            <input type="text" required="" class="form-control" id="lname"
                                                placeholder="Last name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="cname">Company Name</label>
                                            <input class="form-control" required="" type="text" id="cname"
                                                placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="email">Email Addresse</label>
                                            <input class="form-control" required="" type="text" id="email"
                                                placeholder="info@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control first_null" id="country">
                                                <option value="">Select an option...</option>
                                                <option value="AX">usa</option>
                                                <option value="AF">Afghanistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="city">State/City</label>
                                            <select class="form-control first_null" id="city">
                                                <option value="">Select an option...</option>
                                                <option value="AX">Aland Islands</option>
                                                <option value="AF">Afghanistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="zip">State/City</label>
                                            <input type="text" class="form-control" id="zip" required=""
                                                placeholder="Enter Your zipcode">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="faddress">Full Address</label>
                                            <input type="text" class="form-control" id="faddress" required=""
                                                placeholder="Enter your address here..">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-group">
                                            <label for="messages">Additional Notes</label>
                                            <textarea rows="5" class="form-control" id="messages"
                                                placeholder="Order notes"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-=12 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                            <label class="form-check-label" for="materialUnchecked">Save In Address
                                                Book</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                    <tr>
                                        <td>Blue Dress For Woman <span class="product-qty">x 2</span>
                                        </td>
                                        <td>$90.00</td>
                                    </tr>
                                    <tr>
                                        <td>Lether Gray Tuxedo <span class="product-qty">x 1</span>
                                        </td>
                                        <td>$55.00</td>
                                    </tr>
                                    <tr>
                                        <td>Woman Full Sliv Dresss <span class="product-qty">x 3</span>
                                        </td>
                                        <td>$204.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SubTotal</th>
                                        <td class="product-subtotal">$349.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td class="product-subtotal">$349.00</td>
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
                                        id="exampleRadios3" value="option3" checked="">
                                    <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer</label>
                                    <p data-method="option3" class="payment-text">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option"
                                        id="exampleRadios4" value="option4">
                                    <label class="form-check-label" for="exampleRadios4">Check Payment</label>
                                    <p data-method="option4" class="payment-text">Please send your cheque to Store Name,
                                        Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                                <div class="custome-radio">
                                    <input class="form-check-input" type="radio" name="payment_option"
                                        id="exampleRadios5" value="option5">
                                    <label class="form-check-label" for="exampleRadios5">Paypal</label>
                                    <p data-method="option5" class="payment-text">Pay via PayPal; you can pay with your
                                        credit card if you don't have a PayPal account.</p>
                                </div>
                            </div>
                        </div> <a href="#!" class="theme-btn-one btn-black-overlay btn_sm">Place Order</a>
                    </div>
                </div>
            </div>
        </div>



@endsection