@extends('backend.main')
@section('title', '所有貼文')
@section('nav_post', 'active') <!--設定nav顯示active-->

@section('content')
    <div class="row" style="padding-top:30px">   
        <div class="col-md-2">
        </div> 
        <div class="col-md-6">
            <h1>所有貼文列表</h1>   
        </div>

        <div class="col-md-2"> 
            <a href="{{route('posts.create')}}" class="btn btn-primary btn-block btn-h1-spacing">新增貼文</a>
        </div> 
        <hr>
    </div> <!-- end of row -->
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <table class="table" {{--style="table-layout : fixed;"--}}>
                <thead style="text-align: center">
                    <th style="width: 15% ">標  題</th>
                    <th style="width: 20% ">縮  圖</th>
                    <th style="width: 10% ">分  類</th>
                    <th style="width: 40% ">簡  述</th>
                    <th style="width: 15% ">管  理</th>
                </thead>

                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td style="width: 15% ; text-align: center" >{{ $post->title }}</td>
                        <!-- 顯示內文前50個字，如果超過50個字，用...取代-->
                        <td style="width: 20% "><img src="{{asset('asset/images/' . $post->image)}}" alt="..." class="img-thumbnail"></td>
                        <td style="width: 10% ; text-align: center">{{ $post->category['name'] }}</td>
                        <td style="width: 40% ">{{ strip_tags($post->introduction)}}</td>
                        
                        
                        <td style="width: 15% ">{!! Html::linkRoute('posts.show', 'View', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!}
                            {!! Html::linkRoute('posts.edit', 'Edit', array($post->id),  array('class' => 'btn btn-secondary btn-block' )) !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
                    <div class="pages" style="text-align: center">
                        {{$posts->links()}}
                        {!! $posts->render() !!} 
                    </div>
            </div>
    </div>
    

@endsection

{{--
    <td>{{ substr(strip_tags($post->introduction) ,0 , 50)}}{{ strlen(strip_tags($post->introduction)) > 50 ? "..." : ""}}</td>
    <!--conditional ? if true : if flase -->
    <td>{{ substr(strip_tags($post->description) ,0 , 50)}}{{ strlen(strip_tags($post->description)) > 50 ? "..." : ""}}</td>
    
    --}}