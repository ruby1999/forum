@extends('frontend.main')
<?php $titleTag = htmlspecialchars($post->title); ?>
{{--@section('title', '{{$post->title}}')--}}
@section('title', "| $titleTag")
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="row" style="padding-top:20px">
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <h1>{{ $post->title}}</h1>
        <p class="lead">{!! $post->introduction !!}</p>

        

    </div>

    <div class="col-md-4">
        <div class="well">
            @if(!empty($post->image))
                <img src="{{asset('asset/images/' . $post->image)}}" class="img-fluid" alt="Responsive image" />
            @endif
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
                <div class="col-sm-12">
                    {!! Html::linkRoute('posts.list', '回到所有貼文', array(),  array('class' => 'filled-button' )) !!}
                </div>
            </div>
        </div>
    </div>   
</div>     
@endsection

