@extends('backend.master')
@section('title', '頁面分類')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">所有貼文列表</h3>
          <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary fa-align-right" style="float: right">新增消息活動</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> 分類名稱 </th>
                <th> 自訂網址 </th>
                <th> 下層分類 </th>
                <th> 頁面 </th>
              </tr>
              
            </thead>
            <tbody>
              {{dd($datas)}}
                @foreach($datas as $data)
                    <tr>
                      <td> {{ $id}} </td>
                      {{-- <td> {{ $post->title }} </td>
                      <td class="py-1"><img src={{asset('asset/images/' . $post->image)}} alt="image" class="img-thumbnail"/> </td>
                      <td style="width: 10%">{{ $post->category['name'] }}</td>
                      <td>{{((mb_strlen(($post->introduction),'utf8')>50) ? mb_substr(($post->introduction),0,50,'utf8') : ($post->introduction)).' '.((mb_strlen(($post->introduction),'utf8')>20) ? " ..." : "") }}</td>

                      <td>{!! Html::linkRoute('posts.edit', '編輯', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!} 
                        {!! Html::linkRoute('posts.destroy', '刪除', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!}
                      </td> --}}
                    </tr>
                @endforeach
            </tbody>
          </table>
          
          <div class=container4 style="text-align:center" >
            {{-- {!! $posts->links() !!} --}}
          </div>

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