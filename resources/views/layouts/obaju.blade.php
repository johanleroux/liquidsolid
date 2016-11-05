<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title')</title>

  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.default.css') }}" rel="stylesheet">

  <script src="{{ asset('js/respond.min.js') }}"></script>
</head>
<body>
  <div id="top">
    <div class="container">
      <div class="col-md-6 pull-right">
        <ul class="menu">
          @if(Auth::user())
            <li><a href="{{ action('MessagesController@index') }}"><i class="fa fa-envelope"></i> Messages</a></li>
            <li><a href="{{ action('UsersController@edit', Auth::user()) }}"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a></li>
            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          @else
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/login') }}">Register</a></li>
          @endif
        </ul>
      </div>
    </div>
  </div>
  <div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand home" href="{{ url('/')}}">
          <img src="{{ asset('img/logo.png') }}" alt="LiquidSolid">
        </a>
        <div class="navbar-buttons">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-align-justify"></i>
          </button>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle search</span>
            <i class="fa fa-search"></i>
          </button>
          <a class="btn btn-default navbar-toggle" href="basket.html"><i class="fa fa-shopping-cart"></i></a>
        </div>
      </div>
      <!--/.navbar-header -->
      <div class="navbar-collapse collapse" id="navigation">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="{{ url('/')}}">Home</a></li>
          <li><a href="{{ action('AdsController@index') }}">Ads</a></li>
          <li><a href="{{ action('BreedsController@index') }}">Breeds</a></li>
          @if(Auth::user())
            @can('ad.create')
              <li><a href="{{ action('AdsController@create') }}">Post Ad</a></li>
            @else
              <li><a href="#">Apply for Breeder</a></li>
            @endcan
          @endif
        </ul>
      </div>

      <div class="navbar-buttons">
        <div class="navbar-collapse collapse right" id="basket-overview">
          <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <!--/.nav-collapse -->

        <div class="navbar-collapse collapse right" id="search-not-mobile">
          <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle search</span>
            <i class="fa fa-search"></i>
          </button>
        </div>

      </div>

      <div class="collapse clearfix" id="search">
        <form class="navbar-form" role="search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /#navbar -->
  <!-- *** NAVBAR END *** -->

  <div id="all">
    <div id="content">
      @yield('content')
    </div>
    <!-- /#hot -->

    <!-- *** HOT END *** -->
    <!-- *** FOOTER ***
    _________________________________________________________ -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="companyinfo">
              <h2><span>liquid</span>solid</h2>
              <p>Plasma gas is for noobs.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 pull-right">
            <div class="address">
              <img src="http://liquidsolid.app/./img/map.png" alt="World Map">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="copyright">
      <div class="container">
        <div class="col-md-6">
          <p class="pull-left">Copyright © 2016 LiquidSolid. All rights reserved.</p>
        </div>
        <div class="col-md-6">
          <p class="pull-right">Template by <a href="http://www.bootstrapious.com">Responsive Templates</a> with support from <a href="http://kakusei.cz">Designové předměty</a></p>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('js/jquery.cookie.js') }}"></script>
  <script src="{{ asset('js/waypoints.min.js') }}"></script>
  <script src="{{ asset('js/modernizr.js') }}"></script>
  <script src="{{ asset('js/bootstrap-hover-dropdown.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script src="{{ asset('js/front.js') }}"></script>

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
