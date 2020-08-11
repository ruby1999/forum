@extends('backend.master')
@section('title', '所有貼文')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">所有貼文列表</h3>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> 標題 </th>
                <th> 縮圖 </th>
                <th> 分類 </th>
                <th> 簡述 </th>
                <th> 管理 </th>
              </tr>
              
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        
                        <td> {{ $post->title }} </td>
                        <td class="py-1"><img src={{asset('asset/images/' . $post->image)}} alt="image" class="img-thumbnail"/> </td>
                        <td style="width: 10% ;">{{ $post->category['name'] }}</td>
                        <td>{{((mb_strlen(($post->introduction),'utf8')>50) ? mb_substr(($post->introduction),0,50,'utf8') : ($post->introduction)).' '.((mb_strlen(($post->introduction),'utf8')>20) ? " ..." : "") }}</td>

                        <td> {!! Html::linkRoute('posts.show', 'View', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!}
                             {!! Html::linkRoute('posts.edit', 'Edit', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!} </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection



{{--
    <td>{{ substr(strip_tags($post->introduction) ,0 , 50)}}{{ strlen(strip_tags($post->introduction)) > 50 ? "..." : ""}}</td>
    <!--conditional ? if true : if flase -->
    <td>{{ substr(strip_tags($post->description) ,0 , 50)}}{{ strlen(strip_tags($post->description)) > 50 ? "..." : ""}}</td>
    
    --}}