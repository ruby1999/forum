@extends('backend.master')
@section('title', '所有貼文')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">頁面分類</h3>
          <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary fa-align-right" style="float: right">新增消息活動</a>
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
                @foreach($pages as $page)
                {{-- { dd($post) }} 來源是post的model所以可以直接抓裡面的title  -> --}}
                    <tr>
                        
                        <td> {{ $page->title }} </td>

                        <td class="py-1"><img src={{asset('asset/images/' . $page->image)}} alt="image" class="img-thumbnail"/> </td>
                        <td style="width: 10%">{{ $page->category['name'] }}</td>
                        <td>{{((mb_strlen((strip_tags ($page->introduction)),'utf8')>50) ? mb_substr((strip_tags($page->introduction)),0,30,'utf8') : ($page->introduction)).' '.((mb_strlen(($page->introduction),'utf8')>20) ? " ..." : "") }}</td>

                        {{-- <td>{!! Html::linkRoute('pages.edit', '編輯', array($page->id),  array('class' => 'btn btn-secondary btn-block' )) !!} 
                            {!! Html::linkRoute('pages.destroy', '刪除', array($page->id),  array('class' => 'btn btn-secondary btn-block' )) !!}</td> --}}
                    </tr>
                @endforeach
            </tbody>
          </table>
          
          <div class=container4 style="text-align:center" >
            {!! $pages->links() !!}
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