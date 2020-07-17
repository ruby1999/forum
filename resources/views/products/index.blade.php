@extends('main')
@section('title', '所有產品列表')
@section('content')
    <div class="row">    
        <div class="col-md-10">
            <h1>所有產品列表</h1>   
        </div>

        <div class="col-md-2"> 
            <a href="{{route('products.create')}}" class="btn btn-primary btn-block btn-h1-spacing">新增產品</a>
        </div> 
        <hr>
    </div> <!-- end of row -->
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>產品名稱</th>
                    <th>產品類別</th>
                    <th>簡述</th>
                    <th>價錢</th>
                    <th>建立時間</th>
                    <th>更新時間</th>
                </thead>

                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->id }}</td>
                        <!-- 顯示內文前50個字，如果超過50個字，用...取代-->
                        <td>{{ substr(strip_tags($product->introduction) ,0 , 50)}}{{ strlen(strip_tags($product->introduction)) > 50 ? "..." : ""}}</td>
                                                              <!--conditional ? if true : if flase -->
                        <td>{{ $product->price }}</td>
                        <td>{{ date('Y M j h:ia', strtotime($product->created_at)) }}</td>
                        <td>{{ date('Y M j h:ia', strtotime($product->updated_at)) }}</td>
                        <td>{!! Html::linkRoute('products.show', 'View', array($product->id),  array('class' => 'btn btn-secondary btn-block' )) !!}
                            {!! Html::linkRoute('products.edit', 'Edit', array($product->id),  array('class' => 'btn btn-secondary btn-block' )) !!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
                    <div class="gl-pagination prepend-top-default">
                        {!! $products->links() !!}
                    </div>
            </div>
    </div>
    

@endsection
