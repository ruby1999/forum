<!-- NavBar -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        <a class="navbar-brand" href="/backend".html><h2>風雨珈琲 <em>ForumeCoffee</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
            <!--Nav Bar-->
            <li class="nav-item @yield('nav_home')">
                <a class="nav-link" href="/backend">主頁
                <span class="sr-only">(current)</span>
                </a>
            </li> 

            <!--drop down start-->
            <li class="nav-item dropdown @yield('nav_product')">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">產品管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/productList">檢視所有產品</a>
                    <a class="dropdown-item" href="/products/create">新增產品</a>
                    <a class="dropdown-item" href="/categories">類別管理</a>
                    <a class="dropdown-item" href="/tags">標籤管理</a>
                </div>
            </li>
            <!--end of drop down-->

            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">訂單管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">最新訂單</a>
                    <a class="dropdown-item" href="#">待處理訂單</a>
                    <a class="dropdown-item" href="#">歷史訂單</a>
                </div>
            </li>
            <!--end of drop down-->

            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">會員管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">所有會員資料</a>
                    <a class="dropdown-item" href="#">電子報發送</a>
                    <a class="dropdown-item" href="#">檢視訂單</a>
                </div>
            </li>
            <!--end of drop down-->

            <!--drop down start-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">貼文管理</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">撰寫貼文</a>
                    <a class="dropdown-item" href="tags">標籤管理</a>
                    <a class="dropdown-item" href="#">設定貼文曝光</a>
                </div>
            </li>
            <!--end of drop down-->           

            
            <a href="about.html" class="filled-button " style="height: max-content;  margin-top: 10px;">登入或註冊</a>

            <li class="nav-item active">
                <a class="nav-link" href="/home">切換到前台
                <span class="sr-only"></span>
                </a>
            </li>


            <!--Nav Bar-->
            </ul>

        </div>
        </div>
    </nav>
</header>
