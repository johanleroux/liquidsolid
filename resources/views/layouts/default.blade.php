<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
  <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="{{ asset('./img/ico/favicon.ico') }}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('./img/ico/apple-touch-icon-144-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('./img/ico/apple-touch-icon-114-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('./img/ico/apple-touch-icon-72-precomposed.png') }}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('./img/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="{{ url('/') }}"><img src="{{ asset('./img/logo.png') }}" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                @if(Auth::user())
                  <li><a href="#"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
                  <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                @else
                  <li><a href="{{ url('/login') }}"><i class="fa fa-lock"></i> Login</a></li>
                @endif
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ action('AdsController@index') }}">Ads</a></li>
                <li><a href="{{ action('BreedsController@index') }}">Breeds</a></li>
                @if(Auth::user())
                  <li><a href="{{ action('AdsController@create') }}">Post Ad</a></li>
                @endif
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="search_box pull-right">
              <input type="text" placeholder="Search"/>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

  @yield('content')

  <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>liquid</span>solid</h2>
              <p>Plasma gas is for noobs.</p>
            </div>
          </div>
          <div class="col-sm-3 pull-right">
            <div class="address">
              <img src="{{ asset('./img/map.png') }}" alt="World Map" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2016 LiquidSolid. All rights reserved.</p>
          <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
        </div>
      </div>
    </div>

  </footer><!--/Footer-->

  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

  @if (notify()->ready())
    <script>toastr.{{ notify()->type() }}('{{ notify()->message() }}'
    @if(!empty(notify()->option('heading')))
    , '{{ notify()->option('heading') }}'
    @endif
  );
  </script>
@endif
</body>
</html>
