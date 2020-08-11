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
<a class="navbar-brand" href="/home"><h2>風雨珈琲</h2> <em>ForumeCoffee</em></a>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" tabindex="0" data-toggle="dropdown" data-submenu>第一層</a>
                           <div class="dropdown-menu">
                               <div class="dropdown dropright dropdown-submenu">
                                   <button class="dropdown-item dropdown-toggle" type="button" data-toggle="dropdown">第二層</button>
                                   <div class="dropdown-menu">
                                       <button class="dropdown-item" type="button">第三層</button>
                                   </div>
                               </div>    
                           </div>
                       </li>
   
                       <li class="nav-item">
                           <a class="nav-link" href="/backend">切換到後台
                           <span class="sr-only"></span>
                           </a>
                       </li>
   
                       <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">品牌故事</a>
                           <div class="dropdown-menu">
                               <a class="dropdown-item" href="#">所有分店</a>
                           </div>
                       </li>
                   </ul>
           </div> 
            <!--/.Navbar-->
            {{-- START OF 神奇的三層  --}}
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    @foreach ($datas as $key => $item)
                    {{-- 如果只有一層 --}}
                        @if (!isset($item->subCategories))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $subItem->slug }}">{{ $item->name }}
                                <span class="sr-only"></span>
                                </a>
                            </li> 
                        @else
                            {{-- 如果有兩層的話 --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $item->name }}</a>
                                <div class="dropdown-menu">
                                    @foreach ($item->subCategories as $subItem)
                                        @if (!isset($subItem->childCategories))
                                            <a class="dropdown-item" href="#">{{ $subItem->name }}
                                        @else
                                            {{-- 如果有三層的話 --}}
                                            {{-- <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ $subItem->name }}</a> --}}
                                            <button class="dropdown-item dropdown-toggle" type="button" data-toggle="dropdown">{{ $subItem->name }}</button>
                                            <div class="dropdown-menu">
                                                @foreach ($subItem->childCategories as $childItem)
                                                {{-- <button class="dropdown-item" type="button">第三層</button> --}}
                                                <button class="dropdown-item" type="button">{{ $childItem->name }} </button>
                                                @endforeach
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
</header>  

        {{-- <a class="navbar-brand" href="/home"><h2>風雨珈琲 <em>ForumeCoffee</em></h2></a> --}}
        {{-- <a class="navbar-brand" href="/home"><em>風雨珈琲 ForumeCoffee</em></a>
       
        <div class="collapse navbar-collapse">
             <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" tabindex="0" data-toggle="dropdown" data-submenu>第一層</a>
                        <div class="dropdown-menu">
                            <div class="dropdown dropright dropdown-submenu">
                                <button class="dropdown-item dropdown-toggle" type="button" data-toggle="dropdown">第二層</button>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">第三層</button>
                                </div>
                            </div>    
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/backend">切換到後台
                        <span class="sr-only"></span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">品牌故事</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">所有分店</a>
                        </div>
                    </li>
                </ul>
        </div> --}}

{{-- @yield('nav_product') --}}
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
                </li>

                <!--Nav Bar-->


            </div> --}}
        {{-- END OF 神奇的三層 --}}