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

                  
                  <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                      <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
                      <div class="down-content">
                        <a href="#"><h4>這是第一個產品(all des)</h4></a>
                        <h6>$32.50</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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

                  <div class="col-lg-4 col-md-4 all dev">
                    <div class="product-item">
                      <a href="#"><img src="assets/images/product_02.jpg" alt=""></a>
                      <div class="down-content">
                        <a href="#"><h4>這是第二個產品(all dev)</h4></a>
                        <h6>$32.50</h6>
                        <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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
                    
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_03.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>這是第三個產品(all gra)</h4></a>
                          <h6>$32.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
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

                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_04.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>這是第4個產品(all gra)</h4></a>
                          <h6>$24.60</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (48)</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_05.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>這是第5個產品(all dev)</h4></a>
                          <h6>$18.75</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (60)</span>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>這是第6個產品(all des)</h4></a>
                          <h6>$12.50</h6>
                          <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                          <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                          </ul>
                          <span>Reviews (72)</span>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
          </div>



          

          <div class="text-center">
                {!! $products->links() !!}
          </div>

      


        </div>
      </div>
    </div>

@endsection