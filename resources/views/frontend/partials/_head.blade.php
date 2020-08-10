<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!--響應式配置-->
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <!--字體跟標籤小icon都沒作用(我問天)-->
    <link rel="icon" href="asset/images/favicon.ico" type="image/x-icon">
    <link rel="Shortcut Icon" type="image/x-icon" href="asset/images/favicon.ico" />
    <link rel="fluid-icon" href="asset/images/favicon.ico">

    <style>
        body {
            font-family: 'Noto Sans TC', sans-serif;
        }
    </style>

    <link href="{{asset('asset/css/frontend.css')}}" rel="stylesheet"> <!-- 引用字體 -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet"> <!-- 引用字體 -->

    <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
   
    <!--TemplateMo 546 Sixteen Clothing：https://templatemo.com/tm-546-sixteen-clothing-->

    <!-- Additional CSS Files -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <link rel="stylesheet" href="{{asset('asset/css/templatemo-sixteen.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css')}}" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.css')}}">
    <!--交付CSS在連結上-->

    @yield('stylesheet')

    <title>風雨珈琲｜ @yield('title') </title> <!--Remember change here -->
    
    <!--add for three level dropdown-->
    {{-- <link rel="stylesheet" href="{{asset('asset/css/semantic.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-submenu@3.0.1/dist/css/bootstrap-submenu.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> --}}

    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-submenu.min.css')}}">
</head>