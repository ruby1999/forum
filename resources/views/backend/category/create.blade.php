@extends('backend.master')
@section('title', '新增main類別')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('stylesheet') 
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',  // change this value according to your HTML
            content_css : 'mycontent.css' , // resolved to http://domain.mine/mysite/mycontent.css
            plugins: 'advlist link image lists code',
            menubar: false
        });
    </script>
@endsection

@section('content') <!-- Content Start-->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="container" style="padding-top: 30px">
                <h1>新增分類</h1>
                <hr>
				{!! Form::open(['action' => ['backend\CategoryController@store']]) !!}
				
                {{ Form::label('name','分類名稱') }}
				{{ Form::text('name', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255')) }}
				
                {{ Form::label('slug', '自訂網址') }} <p>
				{{ Form::text('slug', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255')) }}
				
                {{Form::submit('儲存分類', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top:20px '))}}
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

@endsection

