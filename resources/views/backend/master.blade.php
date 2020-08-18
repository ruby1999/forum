<!DOCTYPE html>
<html>
<head>
  <title>ForumCoffee｜Backend</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">
  
  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  {!! Html::style('asset/plugins/@mdi/font/css/materialdesignicons.min.css') !!}
  {!! Html::style('asset/plugins/perfect-scrollbar/perfect-scrollbar.css') !!}
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  {!! Html::style('asset/css/apps.css') !!}
  <link rel="icon" href="{{asset('asset//images/favicon.ico')}}" type="image/x-icon">
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('backend.layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('backend.layout.sidebar')
      <div class="main-panel">
        @include('backend/layout/messages')
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('backend.layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  {!! Html::script('asset/plugins/perfect-scrollbar/perfect-scrollbar.min.js') !!}
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  {!! Html::script('asset/js/apps.js') !!}
  {!! Html::script('asset/js/off-canvas.js') !!}
  {!! Html::script('asset/js/hoverable-collapse.js') !!}
  {!! Html::script('asset/js/misc.js') !!}
  {!! Html::script('asset/js/settings.js') !!}
  {!! Html::script('asset/js/todolist.js') !!}

  <!-- end common js -->

  @stack('custom-scripts')
</body>
</html>