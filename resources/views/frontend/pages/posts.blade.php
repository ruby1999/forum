@extends('frontend.main')

@section('title', '消息快報') <!--前端顯示-->
@section('nav_post', 'active') <!--設定nav顯示active-->


@section('content')

    <div class="container">
            <div class="col-md-12">
                <div class="section-heading" style=" padding-top: 30px;">
                    <h2>所有貼文</h2>
                </div>
            </div>

            <div class="best-features">
                <div class="container">
                  <div class="row">
                    
                    <thead>
                        @foreach($posts as $post)                       
                            <tr>
                                <div class="col-md-6">
                                    <div class="left-content">
                                        <h4>{{ $post->name }}</h4>
                                        
                                        <p>{{ strip_tags($post->introduct) }}</p>
                                        <ul class="featured-list">
                                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                                            <li><a href="#">Consectetur an adipisicing elit</a></li>
                                            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                                            <li><a href="#">Corporis, omnis doloremque</a></li>
                                            <li><a href="#">Non cum id reprehenderit</a></li>
                                        </ul>
                                        {!! Html::linkRoute('posts.show', 'Read More', array($post->id), array('class' => 'filled-button', 'style' => 'margin-bottom: 20px; float: right;')) !!}
                                    </div>
                                </div>
                                <!-- 最新貼文的圖片 -->
                                <div class="col-md-6">
                                    <div class="right-image">
                                        {{-- <img src="{{asset('asset/images/' . $post->image)}}" alt=""/> --}}
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </thead>
                </div>
              </div>

        
    </div>
@endsection
