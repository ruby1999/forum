@extends('frontend.main')

@section('title', '| 顯示所有產品') <!--前端顯示-->
@section('nav_product', 'active') <!--設定nav顯示active-->

@section('content')

    <div class="products">
      <div class="container">
        <div class="row">


          <!--分類類別大項-->
          <div class="col-md-12">
            <div class="filters">
              <ul>

                  @foreach($categories as $category)
                    <li class="active" data-filter="*">{{ $category->name }}</li>
                  @endforeach
                  
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">

                  @foreach ($products as $product)
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="{{asset('asset/images/' . $product->image)}}" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>{{ $product->name }}</h4></a>
                          <h6>$ {{$product->price}}</h6>
                          <p>{{ strip_tags($product->introduction) }}</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (36)</span>
                        </div>
                      </div>
                    </div>
                  @endforeach
        </div>
      </div>
    </div>

@endsection