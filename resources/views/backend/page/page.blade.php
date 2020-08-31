@extends('backend.master')
@section('title', '所有貼文')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">頁面分類</h3>
          <a href="{{route('category.create')}}" class="btn btn-sm btn-primary fa-align-right" style="float: right">新增分類</a>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> id </th>
                <th> 標題 </th>
                <th> 自訂網址 </th>
                <th> 父類別id </th>
                <th> 分類 </th>
                <th> 簡介 </th>
                <th> 管理 </th>
              </tr>
              
            </thead>
            <tbody>
                @foreach($contents as $content)
                {{-- { dd($post) }} 來源是post的model所以可以直接抓裡面的  -> --}}
                    <tr>
                        
                        <td> {{ $content->id }} </td>
                        <td> {{ $content->name }} </td>
                        <td> {{ $content->slug }} </td>
                        <td> {{ $content->categoryID }} </td>
                        <td> 無法同時顯示的分類 </td>
                        <td>{{((mb_strlen((strip_tags($content->introduct)),'utf8')>50) ? mb_substr((strip_tags($content->introduct)),0,30,'utf8') : ($content->introduct)).' '.((mb_strlen(($content->introduct),'utf8')>20) ? " ..." : "") }}</td>
                        <td>
                          <button type="button" class="btn btn-dark btn-fw"><i class="mdi mdi-cloud-download"></i>編輯</button>
                          <button type="button"class="btn btn-dark btn-fw"><i class="mdi mdi-upload"></i>檢視</button>    
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          
          <div class=container4 style="text-align:center" >
            {{-- {!! $contents->links() !!} --}}
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