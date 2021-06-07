@extends('Master')

@section('content')




<section id="product_single_one" class="ptb-100">
        <div class="container">
            <div class="row area_boxed">
                <div class="col-lg-4">
                    <div class="product_single_one_img">
                        <div class='zoom' id='ex1'>
                            <img src="{{asset('asset/images')}}/{{$products['gallery']}}" alt="" style=" margin-right: 30px; width:100%"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product_details_right_one">
                        <div class="modal_product_content_one">
                            <h3>{{$products['name']}}</h3>
                            <div class="reviews_rating">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half text-warning"></i>
                                <span>(2 Customer Review)</span>
                            </div>
                            <h4>RS {{$products['price']}}</h4>
                            <p>{{$products['description']}}
                            </p>
                            <div class="customs_selects">
                                <select name="product" class="customs_sel_box">
                                    <option value="volvo">Size</option>
                                    <option value="saab">XL</option>
                                    <option value="mercedes">S</option>
                                    <option value="audi">M</option>
                                    <option value="audi">L</option>
                                </select>
                            </div>
                            <div class="variable-single-item">
                                <span>Color</span>
                                <div class="product-variable-color">
                                    <label for="modal-product-color-red1">
                                        <input name="modal-product-color" id="modal-product-color-red1"
                                            class="color-select" type="radio" checked="">
                                        <span class="product-color-red"></span>
                                    </label>
                                    <label for="modal-product-color-tomato2">
                                        <input name="modal-product-color" id="modal-product-color-tomato2"
                                            class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>
                                    <label for="modal-product-color-green3">
                                        <input name="modal-product-color" id="modal-product-color-green3"
                                            class="color-select" type="radio">
                                        <span class="product-color-green"></span>
                                    </label>
                                    <label for="modal-product-color-light-green4">
                                        <input name="modal-product-color" id="modal-product-color-light-green4"
                                            class="color-select" type="radio">
                                        <span class="product-color-light-green"></span>
                                    </label>
                                    <label for="modal-product-color-blue5">
                                        <input name="modal-product-color" id="modal-product-color-blue5"
                                            class="color-select" type="radio">
                                        <span class="product-color-blue"></span>
                                    </label>
                                    <label for="modal-product-color-light-blue6">
                                        <input name="modal-product-color" id="modal-product-color-light-blue6"
                                            class="color-select" type="radio">
                                        <span class="product-color-light-blue"></span>
                                    </label>
                                </div>
                            </div>
                            <form action="#!" id="product_count_form_two" style="width:30%">
                                <div class="product_count_one">
                                    <div class="plus-minus-input">
                                        <div class="input-group-button">
                                            <button type="button" class="btn btn-primary" data-quantity="minus"
                                                data-field="quantity">
                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                        <input class="form-control" type="number" name="quantity" value="0">
                                        <div class="input-group-button">
                                            <button type="button" class="btn btn-primary" data-quantity="plus"
                                                data-field="quantity">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="links_Product_areas">
                                <form action="/add_to_cart" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$products['id']}}">
                                <input type="hidden" name="product_name" value="{{$products['name']}}">
                                <input type="hidden" name="product_price" value="{{$products['price']}}">

                                <button class="btn btn-success my-3" type="submit">Add To Cart</button>
                                
                                 </form>
                                <a href="/" class="btn btn-danger">Back</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_details_tabs">
                        <ul class="nav nav-tabs">
                            <li><a data-toggle="tab" href="#description" class="active">Description</a></li>
                            <li><a data-toggle="tab" href="#additional">Additional Information</a></li>
                            <li><a data-toggle="tab" href="#review">Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in show active">
                                <div class="product_description">
                                    <p>{{$products['description']}}</p>
                                    <ul>
                                        <li>Vivamus magna justo, lacinia eget consectetur sed</li>
                                        <li>Curabitur aliquet quam id dui posuere blandit</li>
                                        <li>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar </li>
                                    </ul>
                                    <p>
                                    </p>
                                </div>
                            </div>
                            <div id="additional" class="tab-pane fade">
                                <div class="product_additional">
                                    <ul>
                                        <li>Weight: <span>400 g</span></li>
                                        <li>Dimensions: <span>10 x 10 x 15 cm</span></li>
                                        <li>Materials: <span> 60% cotton, 40% polyester</span></li>
                                        <li>Other Info: <span> American heirloom jean shorts pug seitan
                                                letterpress</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <div class="product_reviews">
                                    <ul>
                                        <li class="media">
                                            <div class="media-img">
                                                <img src="assets/img/user/user1.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img">
                                                <img src="assets/img/user/user2.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-img">
                                                <img src="assets/img/user/user3.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <div class="media-header">
                                                    <div class="media-name">
                                                        <h4>Sara Anela</h4>
                                                        <p>5 days ago</p>
                                                    </div>
                                                    <div class="post-share">
                                                        <a href="#!" class="replay">Replay</a>
                                                        <a href="#!" class="">Report</a>
                                                    </div>
                                                </div>
                                                <div class="media-pragraph">
                                                    <div class="product_review_strat">
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                        <span><a href="#!"><i class="fas fa-star"></i></a></span>
                                                    </div>
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque Praesent sapien massa, convallis a pellentesque nec,
                                                        egestas non nisi. Cras ultricies ligula sed magna dictum porta.
                                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                                        dui.
                                                        Vivamus magna justo.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection