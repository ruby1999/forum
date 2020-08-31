@extends('backend.master')
@section('title', '頁面分類')
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
                <th class="checkbox_1">
                  {!! Form::checkbox('checkboxes[]', '0', false, ['class' => 'checkboxes', 'id' => 'checkAll']) !!}
                </th>
                <th> ID </th>
                <th> 分類名稱 </th>
                <th> 自訂網址 </th>
                <th> 下層分類 </th>
                <th> 頁面 </th>
              </tr>
              
            </thead>
            <tbody>

              @foreach($datas as $data)
                  <tr>
                    {{-- @if (($data->categoryID) == 0 ){ --}}
                      <td> {!! Form::checkbox('checkboxes[]', $data->id, false, ['class' => 'checkboxes']) !!} </td>
                      <td> {{ $data->id }} </td>
                      <td> {{ $data->name }} </td>
                      <td> {{ $data->slug }} </td> 
                      {{-- {{ dd( $data->subCategories) }} --}}
                      <td>
                        {{--{{ var_dump((json_decode($data->subCategories))) }} {{-- if is false 代表下層有資料 --}}
                        @if ((empty(json_decode($data->subCategories))) == false )
                            {!! Html::linkRoute('page.subIndex', '有下層分類', array($data->id),  array('class' => 'btn btn-primary btn-fwk' )) !!}   
                        @endif
                      </td>
                      <td> 
                        {{-- <button type="button" class="btn btn-dark btn-fw"><i class="mdi mdi-cloud-download"></i>編輯</button> --}}
                        {{-- <button type="button"class="btn btn-dark btn-fw"><i class="mdi mdi-upload"></i>檢視</button> --}}
                        {!! Html::linkRoute('page.page', '編輯', array($data->id),  array('class' => 'btn btn-primary btn-fwk' )) !!}
                      </td>
                    {{-- @endif --}}
                  </tr>
              @endforeach

              {{-- 用object撈裡面的欄位 --}}
              {{-- @foreach($cats as $cat)
                    <tr>
                      @if (($cat->categoryID) == 0 ){
                        <td> {!! Form::checkbox('checkboxes[]', $cat->id, false, ['class' => 'checkboxes']) !!} </td>
                        <td> {{ $cat->name }} </td>
                        <td> {{ $cat->slug }} </td>
                        <td> {{ $cat->id }}</td>
                        <td>
                          @if (($cat->id) == ($cat->categoryID))
                            <button type="button" class="btn btn-dark btn-fw"><i class="mdi mdi-cloud-download"></i>有下層分類</button>
                          @endif

                        </td>
                        <td> 
                          <button type="button" class="btn btn-dark btn-fw"><i class="mdi mdi-cloud-download"></i>編輯</button>
                          <button type="button" class="btn btn-info btn-fw"><i class="mdi mdi-upload"></i>檢視</button>                
                        </td>
                      }
                      @endif
                    </tr>
               @endforeach --}}


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