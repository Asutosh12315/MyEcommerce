@extends('Master')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    
    @foreach($products as $i)
    
    <div class="carousel-item {{$i['id']==18? 'active':''}}">
    <a href="/product_details/{{$i['id']}}">
      <img src="{{asset('asset/images')}}/{{$i['gallery']}}" style="width: 600px;; height:400px;">
      <div class="carousel-caption d-none d-md-block bg-info font-weight-bolder">
        <h5>{{$i['name']}}</h5>
        <p>{{$i['description']}}</p>
      </div>
      </a>
    </div>
    
    @endforeach
    

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

           <h2 class="text-center">Trending Products</h2>
            <div class="col-lg-9">              
                  <div class="row">
                    @foreach($products as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
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
          
                        <div class="col-lg-12">
                            <!-- pagination start -->
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- pagination end -->
                        </div>
                    </div>
                </div>
@endsection