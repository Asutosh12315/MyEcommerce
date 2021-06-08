@extends('Master')

@section('content')
<div class="col-lg-12">              
                  <div class="row">
                    @foreach($data as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mysearch">
                            <div class="product_wrappers_one">
                                <div class="thumb">
                                    <a href="/product_details/{{$item['id']}}" class="image">
                                        <img src="{{asset('asset/images')}}/{{$item['gallery']}}" alt="Product" style="width: 150px;height:120px;">
                                        
                                    </a>
                                    <div class="actions">
                                        <a href="" class="action wishlist" title="Wishlist"><i
                                                class="far fa-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view"
                                            data-toggle="modal" data-target="#exampleModalCenter"><i
                                                class="fas fa-expand"></i></a>
                                        <a href="" class="action compare" title="Compare"><i
                                                class="fas fa-exchange-alt"></i></a>
                                    </div>
                                    <a  href="#offcanvas-add-cart" title="Add To Cart" class="add-to-cart offcanvas-toggle">Add To Cart</a>
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="/product_details/{{$item['id']}}">{{$item['name']}}</a></h5>
                                    <span class="price">
                                        <span class="new">RS {{$item['price']}}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
@endsection



