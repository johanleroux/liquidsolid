<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $__env->yieldContent('title'); ?> | LiquidSolid</title>
  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/prettyPhoto.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/price-range.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo e(asset('./img/ico/favicon.ico')); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo e(asset('./img/ico/apple-touch-icon-144-precomposed.png')); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo e(asset('./img/ico/apple-touch-icon-114-precomposed.png')); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo e(asset('./img/ico/apple-touch-icon-72-precomposed.png')); ?>">
  <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('./img/ico/apple-touch-icon-57-precomposed.png')); ?>">
</head><!--/head-->

<body>
  <header id="header"><!--header-->
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('./img/home/logo.png')); ?>" alt="" /></a>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <?php if(Auth::user()): ?>
                  <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                  <li><a href="#"><i class="fa fa-user"></i> Welcome, <?php echo e(Auth::user()->name); ?></a></li>
                  <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-user"></i> Logout</a></li>
                <?php else: ?>
                  <li><a href="<?php echo e(url('/login')); ?>"><i class="fa fa-lock"></i> Login</a></li>
                <?php endif; ?>
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
                <li><a href="<?php echo e(url('/')); ?>" class="active">Home</a></li>
                <li class="dropdown"><a href="#">Dog Breeds<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="#">Breed 1</a></li>
                    <li><a href="#">Breed 2</a></li>
                    <li><a href="#">Breed 3</a></li>
                    <li><a href="#">more...</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">Breeders<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="#">Breeder 1</a></li>
                    <li><a href="#">Breeder 2</a></li>
                    <li><a href="#">Breeder 3</a></li>
                    <li><a href="#">more...</a></li>
                  </ul>
                </li>
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

  <?php echo $__env->yieldContent('content'); ?>

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
          <div class="col-sm-7">
            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?php echo e(asset('./img/home/iframe1.png')); ?>" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Circle of Hands</p>
                <h2>24 DEC 2014</h2>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?php echo e(asset('./img/home/iframe2.png')); ?>" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Circle of Hands</p>
                <h2>24 DEC 2014</h2>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?php echo e(asset('./img/home/iframe3.png')); ?>" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Circle of Hands</p>
                <h2>24 DEC 2014</h2>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="<?php echo e(asset('./img/home/iframe4.png')); ?>" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Circle of Hands</p>
                <h2>24 DEC 2014</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="address">
              <img src="<?php echo e(asset('./img/home/map.png')); ?>" alt="World Map" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Top Breeds</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Breed 1</a></li>
                <li><a href="#">Breed 2</a></li>
                <li><a href="#">Breed 3</a></li>
                <li><a href="#">Breed 4</a></li>
                <li><a href="#">Breed 5</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Top Breeders</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Breeder 1</a></li>
                <li><a href="#">Breeder 2</a></li>
                <li><a href="#">Breeder 3</a></li>
                <li><a href="#">Breeder 4</a></li>
                <li><a href="#">Breeder 5</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>About Shopper</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Store Location</a></li>
                <li><a href="#">Affillate Program</a></li>
                <li><a href="#">Copyright</a></li>
              </ul>
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

  <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/price-range.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jquery.prettyPhoto.js')); ?>"></script>
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
