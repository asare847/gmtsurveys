<!DOCTYPE html>
<!--
  Name: Jednotka - Multipurpose Website HTML Template
  Author: Bublina Studio - www.bublinastudio.com, info@bublinastudio.com
  Version: 1.6
-->
<!--[if lt IE 9]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if !IE] -->
<html lang='en'>
  <!-- <![endif] -->
  <head>
    <title>GMT | Home</title>
    <meta content='blog, business, clean, multipurpose template, twitter bootstrap 3, responsive' name='keywords'>
    <meta content='Jednotka is multipurpose Twitter Bootstrap 3 template which is suitable for any type of business or online project. ' name='description'>
    <meta content='BublinaStudio.com' name='author'>
    <meta content='all' name='robots'>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <!--[if IE]> <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'> <![endif]-->
    <link href="{{asset('assets/images/me.ico')}}" rel='shortcut icon' type='image/x-icon'>
    <link href="{{asset('assets/images/meta_icons/apple-touch-icon.png')}}" rel='apple-touch-icon-precomposed'>
    <!-- / required stylesheets -->
    <link href="{{asset('assets/stylesheets/bootstrap/bootstrap.min.css')}}" media="all" id="bootstrap" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/stylesheets/jednotka_orange.css')}}" media="all" id="colors" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
      <script src="assets/javascripts/ie/html5shiv.js" type="text/javascript"></script>
      <script src="assets/javascripts/ie/respond.min.js" type="text/javascript"></script>
    <![endif]-->
  </head>

  <body class='homepage fullsize'>
    <div id='wrapper'>
      <header id='header'>
        <div class='container'>
          <nav class='navbar navbar-collapsed-sm navbar-default' id='nav' role='navigation'>
            <div class='navbar-header'>
              <button class='navbar-toggle' data-target='.navbar-header-collapse' data-toggle='collapse' type='button'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
              </button>
              <a class='navbar-brand' href='{{ url('/') }}'>
      <img alt="Jednotka" width="220" height="65" src="{{asset('assets/images/me.png')}}" />
              </a>
            </div>
            <div class='collapse navbar-collapse navbar-header-collapse'>
              <ul class='nav navbar-nav navbar-right'>
                <li class='active'>
                  <a   href='{{ url('/') }}'>
                    <span>
                      Home
                    </span>
                  </a>
                
                </li>
                <li class=''>
                  <a   href='{{ url('services') }}'>
                    <span>
                      Services
                    
                    </span>
                  </a>
                  
                </li>
                <li class=''>
                  <a    href='{{ url('/about') }}'>
                    <span>
                      About Us
                      
                    </span>
                  </a>
                 
                </li>
                <li class=''>
                  <a class='' href='{{ url('/contact') }}'>
                    <span>
                      Contact
                    </span>
                  </a>
                
                </li>
                
                
              </ul>
            </div>
          </nav>
        </div>
      </header>
      @yield('content')

        <div id='footer-copyright'>
          <div class='container'>
            <div class='row'>
              <div class='col-lg-12 clearfix'>
                <p class='copyright'>
                  Copyright
                  &copy;
                  2016 - {{date('Y')}} GMT SURVEYS
          <div style="text-align:right">
                <img src="{{asset('assets/images/CONTACT.PNG')}}" height="50" width="100">
        </div>
                </p>
                <div class='links'>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                    <i class='fa fa-twitter text-dark'></i>
                  </a>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                    <i class='fa fa-dribbble text-dark'></i>
                  </a>
                  <a class='btn btn-circle btn-medium-light btn-sm' href='#'>
                    <i class='fa fa-facebook text-dark'></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- / required javascripts -->
    <script src="{{asset('assets/javascripts/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/jquery/jquery.mobile.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/bootstrap/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/modernizr/modernizr.custom.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/hover_dropdown/twitter-bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/retina/retina.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/isotope/jquery.isotope.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/isotope/jquery.isotope.sloppy-masonry.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/validate/jquery.validate.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/flexslider/jquery.flexslider.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/countdown/countdown.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/nivo_lightbox/nivo-lightbox.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/plugins/cycle/jquery.cycle.all.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/javascripts/jednotka.js')}}" type="text/javascript"></script>
    
  </body>
</html>
