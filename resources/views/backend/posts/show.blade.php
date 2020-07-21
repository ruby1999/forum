@extends('backend.main')
@section('title', '所有產品列表')
@section('nav_product', 'active') <!--設定nav顯示active-->

@section('content')
<div class="row" style="padding-top:20px">
    <div class="col-md-2">
    </div>
    <div class="col-md-5">
        <h1>{{ $product->name}}</h1>
        <p class="lead">{!!$product->introduction !!}</p>

        @if(!empty($product->image))
        <img src="{{asset('asset/images/' . $product->image)}}" class="img-fluid" alt="Responsive image" />
        @endif

        <div class="tags">
            @foreach ($product->tags as $tag)
                <span class="badge badge-info">{{ $tag->name }}</span>
            @endforeach
        </div>
    </div>


    <div class="col-md-3">
        <div class="well">
            <dl class="dl-horizontal">
                <dt>產品英文名稱:</dt>
                <p>{{ $product->slug }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>Url Slug:</dt>
                <dd><a href="{{url('blog/'.$product->slug)}}"> {{url('blog/'.$product->slug)}}</a></dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>分類類別:</dt>
                <p>{{ $product->category->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>售價:</dt>
                <p>{{ $product->price }}</p>
            </dl>
            <dl class="dl-horizontal">
                <dt>建立時間:</dt>
                <dd>{{ date('Y M j h:ia', strtotime($product->created_at)) }}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>最後更新時間:</dt>
                <dd>{{ date('Y M j h:ia', strtotime($product->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('products.edit', 'Edit', array($product->id),  array('class' => 'btn btn-primary btn-block' )) !!}
                    {{-- button加上route導向 --}}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method'=>'DELETE']) !!}
                    {!! Form::submit('Delect',  ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    {!! Html::linkRoute('products.index', 'Back to all products', array(),  array('class' => 'btn btn-secondary btn-block btn-h1-spacing btn-outline-light' )) !!}
                </div>
            </div>
        </div>
    </div>   
</div>     
@endsection

