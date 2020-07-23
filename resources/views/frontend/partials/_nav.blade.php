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
            <!--Nav Bar-->
            <li class="nav-item @yield('nav_home')">
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/productList" role="button" aria-haspopup="true" aria-expanded="false">所有產品</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/productList">飲品</a>
                    <a class="dropdown-item" href="#">甜點</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">甜點1</a>
                            <a class="dropdown-item" href="#">甜點2</a>
                            <a class="dropdown-item" href="#">甜點3</a>
                        </div>
                    <a class="dropdown-item" href="#">鹹食</a>
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
            </ul>

        </div>
        </div>
    </nav>
</header>
