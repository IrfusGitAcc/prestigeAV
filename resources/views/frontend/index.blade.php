<!DOCTYPE html>
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
          <a class="menubar"  style="color:white;"  href="#menu"><small>Menu</small><span></span></a>
        </div>
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" style="max-width: 25%;"
         src="assets/images/prestige_logo_white.png" alt="prestige_logo_white.png"></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li> <a href="{{ route('home') }}">Home</a></li>
          <li> <a href="{{ route('car.stock') }}">Explore</a></li>
          <li> <a href="{{ route('aboutus') }}">About Us</a></li>
          <li> <a href="{{ route('contact') }}">Contact Us</a></li>
        
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
  
  
  <!-- Home Design -->
  <section class="home-one mt0 mt70-992 p0">
    <div class="container-fluid p0">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-banner-wrapper home3_style">
            <div class="banner-style-one no-dots owl-theme owl-carousel">
              <div class="slide slide-one" style="background-image: url(assets/images/home/2.jpg);height: 640px;">
                <div class="index-banner-content text-center">
                <h2 class="index-banner-title" style="color:white !important;">Prestige Auto Vehicle</h2>
                <p class="banner-subtitle">Where Luxury Meets Performance</p>
                <a href="{{route('car.stock')}}" class="index-banner-btn">Explore Our Cars</a>
              </div>
              </div>
              <div class="slide slide-one" style="background-image: url(assets/images/home/6.jpg);height: 640px;">
                 <div class="index-banner-content text-center">
                <h2 class="index-banner-title" style="color:white !important;">Your Dream Car Awaits</h2>
                <p class="banner-subtitle">Premium Cars. Exceptional Service.</p>
                <a href="{{route('contact')}}" class="index-banner-btn">Contact Us</a>
              </div>
              </div>
            </div>
            <div class="carousel-btn-block banner-carousel-btn">
              <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i></span>
              <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
            </div><!-- /.carousel-btn-block banner-carousel-btn -->
          </div><!-- /.main-banner-wrapper -->
        </div>
      </div>
    </div>
  </section>
  
  

  <!-- Featured Product  -->
  <section class="featured-product">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Featured Listings</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="popular_listing_sliders row">
           
            <div class="tab-content col-lg-12" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-sm-6 col-xl-3">
                            <div class="car-listing">
                                <div class="thumb">
                                   
                                    <img src="{{ asset('assets/images/listing/' . $car->main_image) }}" alt="{{ $car->car_name }}">
                                </div>
                
                                <div class="details">
                                    <div class="wrapper">
                                        <h5 class="price">£{{ number_format($car->price, 2) }}</h5>
                                        <h6 class="title">
                                            <a href="{{ route('car.info', $car->car_id) }}">
                                                {{ $car->make }} {{ $car->model }} - {{ $car->year }}
                                            </a>
                                        </h6>
                                    </div>
                
                                    <div class="listing_footer">
                                        <ul class="mb0">
                                            <li class="list-inline-item">
                                                <span class="flaticon-road-perspective me-2"></span>{{ $car->mileage }}
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="flaticon-gas-station me-2"></span>{{ $car->fuel_type }}
                                            </li>
                                            <li class="list-inline-item">
                                                <span class="flaticon-gear me-2"></span>{{ $car->transmission }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt20">
        <div class="col-lg-12">
          <div class="text-center">
            <a href="{{route('car.stock')}}" class="more_listing">Show All Cars <span class="icon"><span class="fas fa-plus"></span></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Chose us  -->
  <section class="why-chose pt0 pb90">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="main-title text-center">
            <h2>Why Choose Us?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="why_chose_us">
            <div class="icon float-start"><span class="flaticon-price-tag"></span></div>
            <div class="details">
              <h5 class="title">Best Price</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="why_chose_us">
            <div class="icon float-start style2"><span class="flaticon-car"></span></div>
            <div class="details">
              <h5 class="title">Trusted By Thousands</h5>
              <p>Our stress-free finance department that can find financial solutions to save you money.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
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
  
  <!-- Delivery Divider -->
  <section class="deliver-divider bg-img1">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="posr">
           
          </div>
        </div>
        <div class="col-md-9 col-xl-5">
          <div class="home1_divider_content">
            <h2 class="title">We Make Finding The Right Car Simple</h2>
            <p class="para">At Voiture what matters to us is making your car search and buying experience as simple as possible, so you can find the right car quickly and get on with making it yours.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
 
  <!-- Funfact -->
  <section class="our-funfact pt50 pb30">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">27600</div>
              <p class="ff_title">CARS FOR SALE</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">6500</div>
              <p class="ff_title">DEALER REVIEWS</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">8230</div>
              <p class="ff_title">VISITORS PER DAY</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
          <div class="funfact_one text-center">
            <div class="details">
              <div class="timer">5250</div>
              <p class="ff_title">VERIFIED DEALERS</p>
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
                  <img class="rounded-circle" src="assets/images/testimonial/1.png" alt="1.png">
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
                  <img class="rounded-circle" src="assets/images/testimonial/2.png" alt="2.png">
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
                  <img class="rounded-circle" src="assets/images/testimonial/1.png" alt="1.png">
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
                  <img class="rounded-circle" src="assets/images/testimonial/2.png" alt="2.png">
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
                  <img class="rounded-circle" src="assets/images/testimonial/1.png" alt="1.png">
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
                  <img class="rounded-circle" src="assets/images/testimonial/2.png" alt="2.png">
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
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>

<script>
$("#menu").mmenu({
  extensions: ["theme-dark", "position-right", "pagedim-black"],
  offCanvas: {
    position: "right"
  }
});

</script>

<!-- Custom script for all pages --> 
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>