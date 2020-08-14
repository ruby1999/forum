@extends('backend.master')
@section('title', '建立新消息')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('stylesheet') 
    {!! Html::style('css/parsley.css') !!}      <!-- 驗證資料要引用的CSS -->
    {!! Html::style('css/select2.min.css') !!}  <!-- tag要引用的CSS -->

    <!--引用tinymce v4-->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',  // change this value according to your HTML
            content_css : 'mycontent.css' , // resolved to http://domain.mine/mysite/mycontent.css
            plugins: 'advlist link image lists code',
            menubar: false
        });
    </script>
    <!--end of 引用tinymce v4-->
@endsection

@section('content') <!-- Content Start-->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="container" style="padding-top: 30px">
                <h1>新增貼文</h1>
                <hr>
                {!! Form::open(['action' => ['backend\PostController@store']]) !!}
                {{-- {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true]) !!}   --}}
                <!-- 'files' => true 可以傳輸檔案(照片) 如果是用html參數的話要加入enctype="multipart/form-data"-->
                {{ Form::label('title','貼文標題:') }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255')) }}
                {{ Form::label('category_id', '選擇貼文類型:') }}
                {{-- {{ dd($categories) }} --}}
                {{ Form::select('category_id', $categories, ['class'=>'form-control'], ['style' => 'resize:vertical'] )}} {{--在controller裡面加上pluck--}}
                {{-- 前面的''，就是controller 傳入的東西  $request ->category_id; --}}
                
                {{-- <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach
                </select>  --}}

                {{ Form::label('featured_img', '上傳貼文圖片') }}
                {{ Form::file('featured_img') }}

                <hr>

                {{Form::label('introduction','簡述:')}}
                {{Form::textarea('introduction', null, array('class' => 'form-control'))}}
                
                {{Form::label('description','詳細貼文介紹:')}}
                {{Form::textarea('description', null, array('class' => 'form-control'))}}

                {{Form::submit('發布貼文', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top:20px '))}}
                <hr>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script') 

<script src="{{asset('js/parsley.min.js')}}"></script> <!-- 驗證資料要引用的CSS -->
<script src="{{asset('js/select2.min.js')}}"></script> <!-- tag要引用的js -->
 <!-- End of Scripts -->

@endsection

