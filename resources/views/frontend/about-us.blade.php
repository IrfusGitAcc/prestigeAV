!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
<meta name="description" content="Voiture - Automotive & Car Dealer HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Title -->
<title>Prestige Auto vehicles </title>
<!-- Favicon -->
<link href="{{ asset('assets/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('assets/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />

</head>
<body>
<div class="wrapper ovh">

  <!-- Sidebar Panel Start -->
  <div class="listing_sidebar">
    <div class="siderbar_left_home pt20">
      <a class="sidebar_switch sidebar_close_btn float-end" href="#">X</a>
      <div class="footer_contact_widget mt100">
        <h3 class="title">Quick contact info</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur.</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">CONTACT</h5>
        <div class="footer_phone">+1 670 936 46 70</div>
        <p>hello@voiture.com</p>
      </div>
      <div class="footer_about_widget">
        <h5 class="title">OFFICE</h5>
        <p>Germany —<br>329 Queensberry Street,<br>North Melbourne VIC 3051</p>
      </div>
      <div class="footer_contact_widget">
        <h5 class="title">OPENING HOURS</h5>
        <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
      </div>
    </div>
  </div>
  <!-- Sidebar Panel End -->
  
  <!-- header top -->
  <div class="header_top dn-992" style="background-color:black;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-7">
          <div class="header_top_contact_opening_widget text-center text-md-start">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><span class="flaticon-phone-call"></span>1-800-458-56987</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-map"></span>47 Bakery Street, London, UK</a></li>
              <li class="list-inline-item"><a href="#"><span class="flaticon-clock"></span>Mon - Fri 8:00 - 18:00</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-xl-5">
          <div class="header_top_social_widgets text-center text-md-end">
            <ul class="m0">
              <li class="list-inline-item"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
              <li class="list-inline-item"><a href="#"><span class="fab fa-twitter"></span></a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Main Header Nav -->
  <header class="header-nav menu_style_home_one transparent main-menu">
    <!-- Ace Responsive Menu -->
    <nav> 
      <div class="container posr"> 
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
          <button type="button" id="menu-btn">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
        </div>
        <a href="{{ route('home') }}" class="navbar_brand float-start dn-md">
           <img class="logo1 img-fluid" style="max-width: 30%;"
           src="assets/images/prestige_logo_white.png" alt="prestige_logo.png">
				</a>
        <!-- Responsive Menu Structure-->
        <ul id="respMenu" class="ace-responsive-menu text-center" data-menu-style="horizontal">
          <li> <a href="{{ route('home') }}"><span class="title">Home</span></a></li>
          <li> <a href="{{ route('car.stock') }}"><span class="title">Explore</span></a></li>
          <li> <a href="{{ route('aboutus') }}"><span class="title">About Us</span></a></li>
          <li> <a href="{{ route('contact') }}"><span class="title">Contact Us</span></a></li>
         
          <li class="sidebar_panel d-none"><a class="sidebar_switch pt0" href="#"><span></span></a></li>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        <div class="mobile_menu_bar">
          <a class="menubar" href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="assets/images/header-logo2.svg" alt="assets/images/header-logo2.png"></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li><span>Home</span>
          
        </li>
        <li><span>Explore</span>
         
        </li>
        <li><span>About Us</span>
          
        </li>
        <li><span>Contact Us</span>
          
        </li>
        
        <!-- Only for Mobile View -->
        <li class="mm-add-listing">
          <span class="border-none">
            <span class="mmenu-contact-info">
              <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street, London, UK</a></span>
              <span class="phone-num"><i class="flaticon-phone-call"></i> <a href="#">1-800-458-56987</a></span>
              <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00 - 18:00</a></span>
            </span>
            <span class="social-links">
              <a href="#"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
              <a href="#"><span class="fab fa-pinterest"></span></a>
            </span>
          </span>
        </li>
      </ul>
    </nav>
  </div>
	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">About Us</h2>
            
						<ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('aboutus')}}">About Us</a></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Text Content -->
	<section class="about-section pb130">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about_thumb mb30-md">
						<img class="thumb1" src="assets/images//about/1.jpg" alt="1.jpg">
            <img class="img-fluid thumb2" src="assets/images//about/2.jpg" alt="2.jpg">
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="about_content">
            <h2 class="title">Welcome To The Voiture</h2>
            <p class="mb30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur.</p>
            <p class="mb50">Vel illum dolore eu feugiat nulla facilisis at vero eros et accu qui blandit praesent luptatum zzril delenit.</p>
            <a class="btn btn-thm about-btn" href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section>
  
  <!-- Why Chose Us -->
  <section class="why-chose pb90 pt0-md">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
            <div class="details">
              <h5 class="title">Best Price</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start style2"><span class="flaticon-car"></span></div>
            <div class="details">
              <h5 class="title">Trusted By Thousands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="why_chose_us">
            <div class="icon float-start style3"><span class="flaticon-trust"></span></div>
            <div class="details">
              <h5 class="title">Wide Range of Brands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Team -->
  <section class="our-team pb90 pt0">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="team_slider">
            <div class="listing_item_4grid_slider dots_none">
              <div class="item">
                <div class="team_member">
                  <div class="thumb"> <img class="img-fluid" src="assets/images//team/1.jpg" alt="1.jpg"></div>
                  <div class="details">
                    <h4 class="title">Dianne Russell</h4>
                    <p class="para">Dog Trainer</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team_member">
                  <div class="thumb"> <img class="img-fluid" src="assets/images//team/2.jpg" alt="2.jpg"></div>
                  <div class="details">
                    <h4 class="title">Devon Lane</h4>
                    <p class="para">Nursing Assistant</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team_member">
                  <div class="thumb"> <img class="img-fluid" src="assets/images//team/3.jpg" alt="3.jpg"></div>
                  <div class="details">
                    <h4 class="title">Ralph Edwards</h4>
                    <p class="para">President of Sales</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team_member">
                  <div class="thumb"> <img class="img-fluid" src="assets/images//team/4.jpg" alt="4.jpg"></div>
                  <div class="details">
                    <h4 class="title">Esther Howard</h4>
                    <p class="para">Marketing Coordinator</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials  -->
  <section class="our-testimonials-home1 pt120 pb120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="testimonial_slider_home1">
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/1.png" alt="1.png">
                  <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div> 
            <div class="item">
              <div class="testimonial_box">
                <div class="thumb">
                  <img class="rounded-circle" src="assets/images//testimonial/2.png" alt="2.png">
                  <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                </div>
                <div class="details">
                  <div class="icon"><span class="fa fa-quote-left"></span></div>
                  <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus. Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum. Aenean imperdiet. Etiam ultricies cum sociis.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Our Partners -->
  <section class="our-partner pb100">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Popular Makes</h2>
          </div>
        </div>
      </div>
      <div class="partner_divider">
        <div class="row">
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/1.png" alt="1.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/2.png" alt="2.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/3.png" alt="3.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/4.png" alt="4.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/5.png" alt="5.png">
            </div>
          </div>
          <div class="col-6 col-xs-6 col-sm-4 col-xl-2">
            <div class="partner_item">
              <img src="assets/images//partners/6.png" alt="6.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Our Footer -->
  <section class="footer_one pt50 pb25">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-xl-7">
          <div class="footer_about_widget text-start">
            <div class="logo mb40 mb0-sm"><img src="assets/images/prestige_logo_white.png" 
            style="max-width: 30%;" alt="logo.png"></div>
          </div>
        </div>
        <div class="col-md-8 col-xl-5">
          <div class="footer_menu_widget text-start text-md-end mt15">
            <ul>
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Explore</a></li>
              <li class="list-inline-item"><a href="#">Listings</a></li>
              <li class="list-inline-item"><a href="#">Blog</a></li>
              <li class="list-inline-item"><a href="#">Shop</a></li>
              <li class="list-inline-item"><a href="#">Pages</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container pt80 pt20-sm pb70 pb0-sm">
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
          <div class="footer_about_widget">
            <h5 class="title">OFFICE</h5>
            <p>Germany —<br>329 Queensberry Street,<br>North Melbourne VIC 3051</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
          <div class="footer_contact_widget">
            <h5 class="title">NEED HELP</h5>
            <div class="footer_phone">+1 670 936 46 70</div>
            <p>hello@voiture.com</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3">
          <div class="footer_contact_widget">
            <h5 class="title">OPENING HOURS</h5>
            <p>Monday – Friday: 09:00AM – 09:00PM<br>Saturday: 09:00AM – 07:00PM<br>Sunday: Closed</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
          <div class="footer_contact_widget">
            <h5 class="title">KEEP IN TOUCH</h5>
            <form class="footer_mailchimp_form">
              <div class="wrapper">
                <div class="col-auto">
                  <input type="email" class="form-control" placeholder="Enter your email...">
                  <button type="submit">GO</button>
                </div>
              </div>
            </form>
            <p>Get latest updates and offers.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-8 col-xl-9">
          <div class="copyright-widget mt5 text-start mb20-sm">
            <p>CreativeLayers © 2022. All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="footer_social_widget text-start text-md-end">
            <ul class="mb0">
              <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <a class="scrollToHome" href="#"><i class="fas fa-arrow-up"></i></a>
</div>
<!-- Wrapper End --> 
<script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script> 
<script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script> 
<script src="{{ asset('assets/js/popper.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script> 
<script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script> 
<script src="{{ asset('assets/js/isotop.js') }}"></script> 
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script> 
<script src="{{ asset('assets/js/simplebar.js') }}"></script> 
<script src="{{ asset('assets/js/parallax.js') }}"></script> 
<script src="{{ asset('assets/js/scrollto.js') }}"></script> 
<script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script> 
<script src="{{ asset('assets/js/jquery.counterup.js') }}"></script> 
<script src="{{ asset('assets/js/wow.min.js') }}"></script> 
<script src="{{ asset('assets/js/progressbar.js') }}"></script> 
<script src="{{ asset('assets/js/slider.js') }}"></script>
<script src="{{ asset('assets/js/timepicker.js') }}"></script> 

<!-- Custom script for all pages --> 
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>