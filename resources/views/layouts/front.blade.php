<!--
  Author: W3layouts
  Author URL: http://w3layouts
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE HTML>
<html ng-app="LaravelBlogApp">
  <head>
    <title>The Swiss Website Template | Home :: w3layouts</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- start slider -->
    <link href="{{ asset('css/camera.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/camera.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/angular.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('app/app.js') }}"></script>
    <script type='text/javascript' src="{{ asset('app/factories/api.js') }}"></script>
    <script type='text/javascript' src="{{ asset('app/controllers/articles.js') }}"></script>
    <script>
      jQuery(function(){

      	jQuery('#camera_wrap_2').camera({

      		loader: 'bar',
      		pagination: false,
      		thumbnails: true
      	});
      });
    </script>
    <!-- end slider -->
  </head>
  <body ng-controller="ArticlesController">
    <!-- start header -->
    <div class="header-bg">
      <div class="wrap">
        <div class="header">
          <div class="nav">
            <ul>
              <li class="a"><a class="active" href="index.html">Home</a> </li>
              <li><a href="ask.html">Ask</a></li>
              <li><a href="archive.html">Archive</a>  </li>
              <li><a href="contact.html">Contact</a> </li>
            </ul>
          </div>
          <div class="search">
            <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
            <input type="submit" value="Subscribe" id="submit" name="submit">
            <div id="response"> </div>
          </div>
          <div class="clear"> </div>
        </div>
      </div>
    </div>
    <!-- end_header -->
    <div class="wrap">
      <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt=""></a>
      </div>
      <div class="grid">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
      </div>
      <div class="clear"> </div>
    </div>
    <!-- start slider -->
    <div class="slider">
      <div class="fluid_container">
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
          <div data-src="images/slider1.jpg">
            <div class="camera_caption fadeFromBottom">
              <p><a href="index.html">VISTA</a></p>
              <h2>palce your description text here.great spot to tell about deals Lorem Ipsum has been the industry's standard dummy text.</h2>
            </div>
          </div>
          <div data-src="images/slider2.jpg">
            <div class="camera_caption fadeFromBottom">
              <p><a href="index.html">GREAT</a></p>
              <h2> It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers Lorem Ipsum has been the industry's standard dummy text</h2>
            </div>
          </div>
          <div data-src="images/slider4.jpg">
            <div class="camera_caption fadeFromBottom">
              <p><a href="index.html">LIGHT</a></p>
              <h2> It uses a light version of jQuery mobile, navigate the slides by swiping with your fingers Lorem Ipsum has been the industry's standard dummy text</h2>
            </div>
          </div>
        </div>
        <!-- #camera_wrap_2 -->
      </div>
      <!-- fluid_container -->
      <div class="clear"></div>
    </div>
    <!--start-grids-->
    <div class="top-bg" ng-repeat="x in articles">
      <div class="wrap">
        <div class="top-cont">
          <h2>@{{ x.title }}</h2>
          <div class="f_nav1">
            <ul>
              <li>
                <p><i class="icon1"> </i><span>4 Jan 24</span>
                <p>
              </li>
              <li ><a href="#"> <i class="icon2"> </i> <span>Text</span></a></li>
              <li ><a href="#"> <i class="icon3"> </i><span>3 Comments</span></a></li>
            </ul>
            <div class="clear"></div>
          </div>
          <p>@{{ x.content }}</p>
          <h6><a href="#">READ MORE</a></h6>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="footer-bottom">
      <div class="wrap">
        <div class="copy-right">
          <p>&copy; 2014 Swiss. All rights reserved | Template by <a href="http://w3layouts.com/">  w3layouts</a></p>
        </div>
        <div class="social-icons">
          <ul>
            <li class="icon1"><a href="#" target="_blank"> </a></li>
            <li class="icon2"><a href="#" target="_blank"> </a></li>
            <li class="icon3"><a href="#" target="_blank"> </a></li>
            <li class="icon4"><a href="#" target="_blank"> </a></li>
            <li class="icon5"><a href="#" target="_blank"> </a></li>
            <div class="clear"></div>
          </ul>
        </div>
      </div>
      <div class="clear"> </div>
    </div>
  </body>
</html>
