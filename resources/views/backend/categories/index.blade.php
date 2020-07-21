@extends('backend.main')

@section('title', '類別管理')

@section('content')

	<div class="row"  style="padding-top: 30px" >
		<div class="col-md-2" ></div>
		<div class="col-md-5">
			<h1>類別</h1>
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>類別名稱</th>
						<th>編輯</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						{!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
						<td>{{ Form::text('name', null, ['class' => 'form-control']) }}</td>
						<td>
							{!! Form::open(['route' => ['categories.update', $category->id], 'method'=>'GET']) !!}
							{!! Form::submit('Edit',  ['class' => 'btn btn-primary btn-block']) !!}
							{!! Form::close() !!}
						</td>
						<td>
							{!! Form::open(['route' => ['categories.destroy', $category->id], 'method'=>'DELETE']) !!}
							{!! Form::submit('Delect',  ['class' => 'btn btn-danger btn-block']) !!}
							{!! Form::close() !!}
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div> <!-- end of .col-md-8 -->

		<div class="col-md-3">
			<div class="well">
					<h2>建立新類別</h2>
					{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
					{{ Form::text('name', null, ['class' => 'form-control']) }}
					{{ Form::submit('新增類別', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection