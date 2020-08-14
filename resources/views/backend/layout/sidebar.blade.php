<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item {{ active_class(['pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="" aria-controls="pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">頁面管理</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ active_class(['pages/*']) }}" id="pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['pages/login']) }}">
            <a class="nav-link" href="{{ url('/-pages/login') }}">頁面分類</a>
          </li>
          <li class="nav-item {{ active_class(['pages/register']) }}">
            <a class="nav-link" href="/admin/posts">消息管理</a>
          </li>
          <li class="nav-item {{ active_class(['pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/pages/lock-screen') }}">關於我們</a>
          </li>
          <li class="nav-item {{ active_class(['pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/pages/lock-screen') }}">聯絡我們</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['charts/chartjs']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">商品管理</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ active_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">菜單管理</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">商品管理</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['sales-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#sales-pages" aria-expanded="" aria-controls="sales-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">訂單管理</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ active_class(['sales-pages/*']) }}" id="sales-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['sales-pages/login']) }}">
            <a class="nav-link" href="{{ url('/sales-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['sales-pages/register']) }}">
            <a class="nav-link" href="{{ url('/sales-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['sales-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/sales-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    

    <li class="nav-item {{ active_class(['charts/chartjs']) }}">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['tables/basic-table']) }}">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['icons/material']) }}">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">會員管理</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ active_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html" target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>