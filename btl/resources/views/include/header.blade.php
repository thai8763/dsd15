<header class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Bách Khoa Drive
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Search -->
            <form class="navbar-form navbar-left">
                <input type="text" class="form-control" placeholder="Tìm kiếm" size="70">
                <button type="submit" class="btn btn-info"> <span class="glyphicon glyphicon-search"></span></button>
            </form>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}"> <span class="glyphicon glyphicon-user"></span> Đăng nhập </a></li>
                <li><a href="{{ url('/register') }}"> <span class="glyphicon glyphicon-pencil"></span> Đăng ký </a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href=""> Trang cá nhân </a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Thoát
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                        {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</header>

<!-- banner recommend app -->
@if(Auth::guest())
<div class="jumbotron" style="background-color: darkviolet; color: white;">
    <div class="container">
        <h1> Bách Khoa Drive </h1>
        <p> Đây là ứng dụng lưu trữ tài liệu học tập dành cho các sinh viên Bách Khoa </p>
    </div>
</div>
@endif