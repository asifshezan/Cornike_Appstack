<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cornike</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="{{asset('contents/website')}}/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{asset('contents/website')}}/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/website.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/colorbox.css">
  </head>
  <body>
    <div class="body-inner">
      <div class="preload"></div>
      <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
              <ul class="top-info">
                <li>
                  <i class="fa fa-phone">&nbsp;</i>
                  <p class="info-text">(+89) 530-352-3027</p>
                </li>
                <li>
                  <i class="fa fa-envelope-o">&nbsp;</i>
                  <p class="info-text">info@cornike.com</p>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 top-social text-right">
              <ul class="unstyled">
                <li>
                  <a title="Facebook" href="#">
                    <span class="social-icon">
                      <i class="fa fa-facebook"></i>
                    </span>
                  </a>
                  <a title="Twitter" href="#">
                    <span class="social-icon">
                      <i class="fa fa-twitter"></i>
                    </span>
                  </a>
                  <a title="Google+" href="#">
                    <span class="social-icon">
                      <i class="fa fa-google-plus"></i>
                    </span>
                  </a>
                  <a title="Linkdin" href="#">
                    <span class="social-icon">
                      <i class="fa fa-linkedin"></i>
                    </span>
                  </a>
                  <a title="Rss" href="#">
                    <span class="social-icon">
                      <i class="fa fa-rss"></i>
                    </span>
                  </a>
                  <a title="Skype" href="#">
                    <span class="social-icon">
                      <i class="fa fa-skype"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <header id="header" class="header">
        <div class="container">
          <div class="row">
            <div class="navbar-header">
              <div class="logo">
                <a href="{{url('/')}}">
                  <img src="{{asset('contents/website')}}/images/logo.png" alt="">
                </a>
              </div>
            </div>
            <div class="site-nav-inner">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <nav class="collapse navbar-collapse navbar-responsive-collapse pull-right">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="{{url('/')}}">Home</a></li>
                  <li class=""><a href="{{url('about')}}">About Us</a></li>
                  <li class=""><a href="#">Our Project</a></li>
                  <li class=""><a href="#">Services</a></li>
                  <li class=""><a href="#">Media</a></li>
                  <li class=""><a href="#">Contact Us</a></li>
                  <li class="nav-search">
                    <span id="search">
                      <i class="fa fa-search"></i>
                    </span>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="#">Get Free Quote</a>
                  </li>
                </ul>
              </nav>

              <div class="search" style="display: none;">
                <input type="text" class="form-control" placeholder="Type what you want and enter">
                <span class="search-close">&times;</span>
              </div>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
      <footer id="footer" class="footer bg-overlay">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="action-box">
                  <span class="action-box-icon">
                    <i class="fa fa-map-marker"></i>
                  </span>
                  <div class="action-box-content">
                    <h3>Where We Are</h3>
                    <p class="action-box-text">CorNike Incorporate, 1450 Boone Crockett Lane, USA</p>
                    <p>
                      <a href="#">
                        <i class="fa fa-caret-right"></i> Find More </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="action-box">
                  <span class="action-box-icon">
                    <i class="fa fa-wrench"></i>
                  </span>
                  <div class="action-box-content">
                    <h3>Subcontractors</h3>
                    <p class="action-box-text">Get qualified today and work with us globally</p>
                    <p>
                      <a href="#">
                        <i class="fa fa-caret-right"></i> Learn More </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="action-box">
                  <span class="action-box-icon">
                    <i class="fa fa-comments"></i>
                  </span>
                  <div class="action-box-content">
                    <h3>Contact Us</h3>
                    <p class="action-box-text">Mail us: info@cornike.com <br /> Call us: +253-480-8973 </p>
                    <p>
                      <a href="#">
                        <i class="fa fa-caret-right"></i> Learn More </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-main">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-12 footer-widget footer-about">
                <h3 class="widget-title">About Us</h3>
                <img class="footer-logo" src="{{asset('contents/website')}}/images/footer-logo.png" alt="" />
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua.</p>
                <div class="footer-social">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="fa fa-rss"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-linkedin"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 footer-widget">
                <h3 class="widget-title">Working Hours</h3>
                <div class="working-hours">We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our Hotline and Contact form. <br>
                  <br>Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                  <br>Saturday: <span class="text-right">12:00 - 15:00</span>
                  <br>Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                </div>
              </div>
              <div class="col-md-3 col-sm-12 footer-widget">
                <h3 class="widget-title">Services</h3>
                <ul class="list-arrow">
                  <li>
                    <a href="#">Pre-Construction</a>
                  </li>
                  <li>
                    <a href="#">General Contracting</a>
                  </li>
                  <li>
                    <a href="#">Construction Management</a>
                  </li>
                  <li>
                    <a href="#">Design and Build</a>
                  </li>
                  <li>
                    <a href="#">Self-Perform Construction</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-12 footer-widget">
                <h3 class="widget-title">Instagram Widget</h3>
                <div class="instagram-widget">
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery1.jpg" alt="" />
                  </a>
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery2.jpg" alt="" />
                  </a>
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery3.jpg" alt="" />
                  </a>
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery4.jpg" alt="" />
                  </a>
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery5.jpg" alt="" />
                  </a>
                  <a href="#">
                    <img class="img-responsive" src="{{asset('contents/website')}}/images/gallery/gallery6.jpg" alt="" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <div class="copyright-info">
                  <span>Copyright © 2016 Cornike. All Rights Reserved.</span>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6">
                <div class="footer-menu">
                  <ul class="nav unstyled">
                    <li>
                      <a href="#">Investors</a>
                    </li>
                    <li>
                      <a href="#">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="#">Events</a>
                    </li>
                    <li>
                      <a href="#">Case Studies</a>
                    </li>
                    <li>
                      <a href="#">Videos</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
              <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-double-up"></i>
              </button>
            </div>
          </div>
        </div>
      </footer>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/waypoints.min.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.colorbox.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/isotope.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/smoothscroll.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/ini.isotope.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/custom.js"></script>
      <script type="text/javascript" src="{{asset('contents/website')}}/js/website.js"></script>
    </div>
  </body>
</html>
