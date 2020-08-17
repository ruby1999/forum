@extends('backend.master')

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
			content_css : 'mycontent.css' , // resolved to http://domain.mine/mysite/mycontent.css
            plugins: 'advlist link image lists code',
            menubar: false
        });
    </script>
    <!--end of 引用tinymce v4-->
@endsection

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
			<h3>編輯貼文</h3>
			{!! Html::linkRoute('posts.index', '回到所有貼文', array(),  array('class' => 'btn btn-md btn-danger')) !!}

			<div class="row" style="padding-top: 20px">
				<div class="col-md-12">
					{{-- {!! Form::open(['action' => ['backend\PostController@update'], $post->id]) !!} --}}
					{!! Form::model($post, ['action' => ['backend\PostController@update', $post->id], 'method' => 'PUT']) !!}
					{{ Form::label('title', '貼文標題:') }}
					{{ Form::text('title', ($post->title), ["class" => 'form-control input-lg']) }} 

					{{ Form::label('title', '建立時間:' )}}
					{{ Form::label('created_at', ($post->created_at)) }} <p>

					{{ Form::label('title', '上次更新時間:') }}
					{{ Form::label('updated_at', ($post->updated_at)) }} <p>
					{{-- {{ date('Y/m/d  H:s', strtotime($post->updated_at)) }}<p> --}}

					{{ Form::label('category_id', "貼文類別:", ['class' => 'form-spacing-top']) }}
					{{ Form::select('category_id', $categories, null, ['class' => '']) }}<p>

					{{ Form::label('featured_img', '更新貼文圖片', ['class' => 'form-spacing-top']) }}
					{{ Form::file('featured_img') }}<p>
					
					<!-- 圖片-->
					@if(!empty($post->image))
						<img src="{{asset('asset/images/' . $post->image)}}" class="img-fluid" alt="Responsive image" style=" .img-fluid. max-width: 100%;" />
					@endif
					<p>
					<hr>

					{{ Form::label('introduction', "簡述:", ['class' => 'form-spacing-top']) }}
					{{ Form::textarea('introduction', $post->introduction, ['class' => 'form-control']) }}

					{{ Form::label('description', "詳細貼文介紹:", ['class' => 'form-spacing-top']) }}
					{{ Form::textarea('description', $post->description, ['class' => 'form-control']) }} <p>

										{{-- {{ Form::submit('儲存產品資料', ['class' => 'btn btn-md btn-success']) }} --}}
				{{ Form::submit('修改儲存', array('class' => 'btn btn-success btn-lg btn-block' , 'style' => 'margin-top:20px ')) }}
				{!! Form::close() !!}

				</div>

			</div>	<!-- end of .row (form) -->

	  	</div>
	</div>
</div>
@stop


@section('script') 
{!! Html::script('js/select2.min.js') !!}  <!-- tag要引用的js -->
<script src="//select2.github.io/select2/select2-3.4.2/select2.js"></script>   
<script src="jquery.js"></script>
<script src="parsley.min.js"></script>  <!-- 驗證資料要引用的CSS -->

@endsection <!-- End of Scripts -->

