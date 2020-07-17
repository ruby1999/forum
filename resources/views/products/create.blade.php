@extends('main')
@section('title', '上架產品')

@section('stylesheet') 
    {!! Html::style('css/parsley.css') !!}      <!-- 驗證資料要引用的CSS -->
    {!! Html::style('css/select2.min.css') !!}  <!-- tag要引用的CSS -->

    <!--引用tinymce v4-->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script src="parsley.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',  // change this value according to your HTML
            plugins: 'advlist link image lists code',
            menubar: false
        });
    </script>
    <!--end of 引用tinymce v4-->
@endsection

@section('content') <!-- Content Start-->

<div class="col-md-8 col-md-offset-2">
    <h1>上架新產品</h1>
    <hr>
    {!! Form::open(['route' => 'products.store', 'data-parsley-validate' => '', 'files' => true]) !!}  
    <!-- 'files' => true 可以傳輸檔案(照片) 如果是用html參數的話要加入enctype="multipart/form-data"-->

        {{Form::label('name','產品名稱:')}}
        {{Form::text('title', null, array('class' => 'form-control', 'required'=>'', 'maxlength'=>'255'))}}

        {{Form::label('slug','產品英文名稱:')}}
        {{Form::text('slug', null, array('class' => 'form-control', 'required'=>'', 'minlength'=>'5', 'maxlength'=>'255'))}}

        {{ Form::label('category_id', '產品類別:') }}
        <select class="form-control" name="category_id">
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
            @endforeach

        </select>

        {{ Form::label('tags', '標籤:') }}
        <select class="form-control select2-multi" name="tags[]" multiple="multiple" id="select2">
            @foreach($tags as $tag)
                <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
            @endforeach
        </select>

        {{ Form::label('featured_img', '請上傳產品圖片') }}
        {{ Form::file('featured_img') }}
    
        {{Form::label('introduction','簡述:')}}
        {{Form::textarea('introduction', null, array('class' => 'form-control'))}}
        
        {{Form::label('description','詳細產品介紹:')}}
        {{Form::textarea('description', null, array('class' => 'form-control'))}}

        {{Form::label('price','價錢:')}}
        {{Form::text('price', null, array('class' => 'form-control'))}}

        {{Form::submit('新增產品', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top:20px '))}}
        <hr>

    {!! Form::close() !!}
</div>
@endsection

@section('script') 

{!! Html::script('js/select2.min.js') !!}  <!-- tag要引用的js -->
<script src="//select2.github.io/select2/select2-3.4.2/select2.js"></script>   
<script src="jquery.js"></script>
<script src="parsley.min.js"></script>  <!-- 驗證資料要引用的CSS -->

@endsection <!-- End of Scripts -->

