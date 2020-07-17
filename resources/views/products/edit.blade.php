@extends('main')

@section('title', '| 編輯產品內容')

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

@section('content')

	<div class="row">
		<div class="col-md-8">
            {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files'=> 'true']) !!}
			{{ Form::label('name', '產品名稱:') }}
			{{ Form::text('name', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('slug', '產品英文名稱:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}

			{{ Form::label('category_id', "產品類別:", ['class' => 'form-spacing-top']) }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

			{{ Form::label('tags', '標籤分類:', ['class' => 'form-spacing-top']) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

			{{ Form::label('featured_img', '更新產品圖片', ['class' => 'form-spacing-top']) }}
            {{ Form::file('featured_img') }}
			
			{{ Form::label('introduction', "簡述:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('introduction', null, ['class' => 'form-control']) }}

			{{ Form::label('description', "詳細產品介紹:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('description', null, ['class' => 'form-control']) }}

			{{ Form::label('price', '價錢:', ['class' => 'form-spacing-top']) }}
			{{ Form::text('price', null, ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>建立時間:</dt>
					<dd>{{ date('Y m j H:s', strtotime($product->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>上次更新時間:</dt>
					<dd>{{ date('Y m j H:s', strtotime($product->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
                        <!--  button加上route導向 -->
						{!! Html::linkRoute('products.show', '取消修改產品', array($product->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
                          <!-- 要用FORM提交-->
						{{ Form::submit('儲存產品資料', ['class' => 'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->

@stop


@section('script') 
{!! Html::script('js/select2.min.js') !!}  <!-- tag要引用的js -->
<script src="//select2.github.io/select2/select2-3.4.2/select2.js"></script>   
<script src="jquery.js"></script>
<script src="parsley.min.js"></script>  <!-- 驗證資料要引用的CSS -->

<script type="text/javascript">
	$('.select2-multi').select2();
	$('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
</script>

@endsection <!-- End of Scripts -->

