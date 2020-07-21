@extends('backend.main')
@section('nav_product', 'active') <!--設定nav顯示active-->
@section('title', '標籤管理')

@section('content')

	<div class="row"  style="padding-top: 30px" >
		<div class="col-md-3" ></div>
		<div class="col-md-4">
			<h1></h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>標籤名稱</th>
						<th>編輯</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<td>{{ $tag->id }}</td>
						{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
						<td>{{ Form::text('name', null, ['class' => 'form-control']) }}</td>
						<td>
							{!! Form::open(['route' => ['tags.update', $tag->id], 'method'=>'GET']) !!}
							{!! Form::submit('Edit',  ['class' => 'btn btn-primary btn-block']) !!}
							{!! Form::close() !!}
						</td>
						<td>
							{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method'=>'DELETE']) !!}
							{!! Form::submit('Delect',  ['class' => 'btn btn-danger btn-block']) !!}
							{!! Form::close() !!}
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-2">
			<div class="well">
					<h2>建立新標籤</h2>
					{!! Form::open(['route' => 'tags.store', 'method' => 'POST']) !!}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
					{{ Form::submit('新增標籤', ['class' => 'btn btn-success btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection