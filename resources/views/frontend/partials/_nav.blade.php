<!-- Page Content -->
<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->

<!-- NavBar -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="/home".html><h2>風雨珈琲 <em>ForumeCoffee</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                
                @foreach ($datas as $key => $item)
                    @if (!isset($item->subCategories))
                        <li class="nav-item @yield('nav_home')">
                            <a class="nav-link" href="/backend">{{ $item->name }}
                            <span class="sr-only">(current)</span>
                            </a>
                        </li> 
                    @else
                        <li class="nav-item dropdown @yield('nav_product')">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $item->name }}</a>
                            <div class="dropdown-menu">
                                @foreach ($item->subCategories as $subItem)
                                    <a class="dropdown-item" href="/allPost">{{ $subItem->name }}</a>
                                    {{-- @if (!isset($subItem->childCategories))
                                        <a class="nav-link" href="/backend">{{ $subItem->name }}
                                    @else
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $subItem->name }}</a>
                                        <div class="dropdown-menu">
                                            @foreach ($subItem->childCategories as $childItem)
                                                <a class="dropdown-item" href="/products">{{ $childItem->name }}</a>
                                            @endforeach
                                        </div>
                                    @endif --}}
                                @endforeach
                            </div>
                        </li>
                    @endif
                @endforeach


            <!--Nav Bar-->
            {{-- <li class="nav-item @yield('nav_home')">
                <a class="nav-link" href="/home">主頁
                <span class="sr-only">(current)</span>
                </a>
            </li> 
            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">最新消息</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/allPost">所有消息</a>
                    <a class="dropdown-item" href="/dailyPost">日常消息</a>
                    <a class="dropdown-item" href="/salePost">優惠消息</a>
                </div>
            </li>
            <!--end of drop down-->
           
            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/productList" role="button" aria-haspopup="true" aria-expanded="false">手作甜點</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/productList">所有產品</a>
                    <a class="dropdown-item" href="#">飲品</a>
                    <a class="dropdown-item" href="#">甜塔</a>
                    <a class="dropdown-item" href="#">重乳酪</a>
                    <a class="dropdown-item" href="#">戚風</a>
                    <a class="dropdown-item" href="#">鏡面</a>
                    <a class="dropdown-item" href="#">假日限定</a>
                </div>
            </li>
            <!--end of drop down-->

            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">蛋糕預定</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">熱銷口味</a>
                    <a class="dropdown-item" href="#">季節限定</a>
                    <a class="dropdown-item" href="#">節日限定</a>
                </div>
            </li>
            <!--end of drop down-->

            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">品牌故事</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">所有分店</a>
                    <a class="dropdown-item" href="#">聯絡我們</a>
                </div>
            </li>
            <!--end of drop down-->

            
            <a href="about.html" class="filled-button " style="height: max-content;  margin-top: 10px;">登入或註冊</a>

            <li class="nav-item active">
                <a class="nav-link" href="/backend">切換到後台
                <span class="sr-only"></span>
                </a>
            </li> --}}

            <!--Nav Bar-->
            </ul>

        </div>
        </div>
    </nav>
</header>
