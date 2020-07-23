@extends('backend.main')
@section('title', '所有產品列表')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="row" style="padding-top:20px">
    <div class="col-md-2">
    </div>
    <div class="col-md-5">
        <h1>{{ $post->title}}</h1>
        <p class="lead">{{ $post->introduction }}</p>

        @if(!empty($post->image))
        <img src="{{asset('asset/images/' . $post->image)}}" class="img-fluid" alt="Responsive image" />
        @endif

    </div>

    <div class="col-md-3">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>貼文標題:</dt>
                <p>{{ $post->title }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>分類類別:</dt>
                <p>{{ $post->category->name or 'defaultUrl' }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>簡述:</dt>
                <p>{{ $post->price }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>詳細介紹:</dt>
                <dd>{{ date('Y/M/j h:ia', strtotime($post->created_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.edit', 'Edit', array($post->id),  array('class' => 'btn btn-primary btn-block' )) !!}
                    {{-- button加上route導向 --}}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Delect',  ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {!! Html::linkRoute('posts.index', '回到所有貼文', array(),  array('class' => 'btn btn-secondary btn-block btn-h1-spacing btn-outline-light' )) !!}
                </div>
            </div>
        </div>
    </div>   
</div>     
@endsection

