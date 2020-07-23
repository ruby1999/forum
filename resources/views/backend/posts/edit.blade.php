@extends('backend.main')

@section('title', '| 編輯貼文')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('stylesheet') 
    {!! Html::style('css/parsley.css') !!}      <!-- 驗證資料要引用的CSS -->

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

	<div class="row" style="padding-top: 30px">
		<div class="col-md-2">
		</div>
		<div class="col-md-5">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files'=> 'true']) !!}
			{{ Form::label('title', '貼文標題:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('category_id', "貼文類別:", ['class' => 'form-spacing-top']) }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

			{{ Form::label('featured_img', '更新產品圖片', ['class' => 'form-spacing-top']) }}
			{{ Form::file('featured_img') }}
			
			<!-- 圖片-->
			@if(!empty($post->image))
				<img src="{{asset('asset/images/' . $post->image)}}" class="img-fluid" alt="Responsive image" style=" .img-fluid. max-width: 100%;" />
			@endif
			
			<hr>

			{{ Form::label('introduction', "簡述:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('introduction', null, ['class' => 'form-control']) }}

			{{ Form::label('description', "詳細產品介紹:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('description', null, ['class' => 'form-control']) }}

		</div>

		<div class="col-md-3">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>建立時間:</dt>
					<dd>{{ date('Y/m/j  H:s', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>上次更新時間:</dt>
					<dd>{{ date('Y/m/j  H:s', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
                        <!--  button加上route導向 -->
						{!! Html::linkRoute('posts.show', '取消修改產品', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
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

@endsection <!-- End of Scripts -->

