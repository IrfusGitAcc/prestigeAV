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
<style>
.active-thumb img {
    border: 2px solid #ff6600;
    border-radius: 8px;
}
</style>
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
           src="{{ asset('assets/images/prestige_logo_white.png') }}" alt="prestige_logo.png">
				</a>
        <!-- Responsive Menu Structure-->
       <ul id="respMenu" class="ace-responsive-menu text-center" data-menu-style="horizontal">
          <li> <a href="{{ route('home') }}"><span class="title">Home</span></a></li>
          <li> <a href="{{ route('car.stock') }}"><span class="title">View Stock</span></a></li>
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
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" style="max-width: 25%;"
        src="{{ asset('assets/images/prestige_logo_white.png') }}" alt="prestige_logo_white.png"></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
      <ul>
        <li> <a href="{{ route('home') }}">Home</a></li>
          <li> <a href="{{ route('car.stock') }}">View Stock</a></li>
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

  <!-- Agent Single Grid View -->
  <section class="our-agent-single pb90 mt70-992 pt30 bt1">
    <div class="container">
      <div class="row mb30">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <ol class="breadcrumb float-start">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Our Stock</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="row mb30">
          <!-- Main Image Section -->
          <div class="col-lg-7 col-xl-8">
              <div class="single_product_grid single_page1">
                  <div class="sps_content">
                      <div class="thumb">
                          <div class="single_product">
                              <div class="single_item">
                                  <div class="thumb">
                                      <img id="mainCarImage" 
                                           class="img-fluid" 
                                           src="{{ asset('assets/images/listing/' . $car->main_image) }}" 
                                           alt="{{ $car->car_name }}">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
          <!-- Gallery Images Section -->
          <div class="col-lg-5 col-xl-4">
              <div class="row">
                  @foreach($galleryImages as $image)
                      <div class="col-xxs-6 col-xs-3 col-sm-3 col-md-6 mb25">
                          <div class="sp5_small_img">
                              <div class="thumb">
                                  <a href="javascript:void(0)" 
                                     class="gallery-thumb" 
                                     data-image="{{ asset('assets/images/gallery/' . $image) }}">
                                      <img class="img-whp" 
                                           src="{{ asset('assets/images/gallery/' . $image) }}" 
                                           alt="{{ $car->car_name }}">
                                  </a>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>       
      <div class="row mb30">
        <div class="col-lg-7 col-xl-8">
          <div class="single_page_heading_content">
            <div class="car_single_content_wrapper">
              <h2 class="title">{{ $car->car_name }}</h2>
              <p class="para">{{ $car->make}} {{ $car->model}} {{ $car->varient}} {{ $car->year }}</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="single_page_heading_content text-start text-lg-end">
            <div class="price_content">
              <div class="price mt60 mb10 mt10-md"><h3><small class="mr15"></small>£{{ $car->price }}</h3></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-xl-8">
          <div class="row">
            <div class="col-lg-12">
              <div class="listing_single_description mt30 bdr_none p0">
                <h4 class="mb30">Description <span class="float-end body-color fz13">Stock {{$car->stock}}</span></h4>
                <p class="first-para">{{ $car->description }}</p>
                <!--<p class="mb25"></p>
                <p class="mt10 mb20"></p>-->
              </div>
            </div>
            <div class="col-lg-12">
              <div class="user_profile_service bdr_none p0 mt30">
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="title">Features</h4>
                  </div>
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Convenience</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Heated Seats</li>
                      <li>Heated Steering Wheel</li>
                      <li>Navigation System</li>
                      <li>Power Liftgate</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Entertainment</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Apple CarPlay/Android Auto</li>
                      <li>Bluetooth</li>
                      <li>HomeLink</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Exterior</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Alloy Wheels</li>
                      <li>Sunroof/Moonroof</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-6 col-xl-6">
                    <h5 class="subtitle">Safety</h5>
                  </div>
                  <div class="col-lg-6 col-xl-5">
                    <ul class="service_list">
                      <li>Backup Camera</li>
                      <li>Blind Spot Monitor</li>
                      <li>Brake Assist</li>
                      <li>LED Headlights</li>
                      <li>Stability Control</li>
                    </ul>
                  </div>
                </div>
                <hr>
               
              </div>
              
            </div>
            
            
          </div>
        </div>
        <div class="col-lg-4 col-xl-4">
          
          <div class="opening_hour_widgets p30 mb30">
            <div class="wrapper">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Make</div>
                  </div>
                  <span class="schedule">{{ $car->make }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Model</div>
                  </div>
                  <span class="schedule">{{ $car->model }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Color</div>
                  </div>
                  <span class="schedule">{{ $car->color }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Drive Type</div>
                  </div>
                  <span class="schedule">{{ $car->drive_type }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Transmission</div>
                  </div>
                  <span class="schedule">{{ $car->transmission }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Condition</div>
                  </div>
                  <span class="schedule">{{ $car->condition }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Year</div>
                  </div>
                  <span class="schedule">{{ $car->year }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Mileage</div>
                  </div>
                  <span class="schedule">{{ $car->mileage }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Fuel Type</div>
                  </div>
                  <span class="schedule">{{ $car->fuel_type }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Engine Size</div>
                  </div>
                  <span class="schedule">{{ $car->engine_size }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Doors</div>
                  </div>
                  <span class="schedule">{{ $car->doors }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">Cylinders</div>
                  </div>
                  <span class="schedule">{{ $car->cylinder }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                  <div class="me-auto">
                    <div class="day">VIN</div>
                  </div>
                  <span class="schedule">{{ $car->vin }}</span>
                </li>
              </ul>
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
            <div class="logo mb40 mb0-sm"><img style="max-width: 30%;"
            src="{{ asset('assets/images/prestige_logo_white.png') }}" 
            alt="prestige_logo_white.png"></div>
          </div>
        </div>
        <div class="col-md-8 col-xl-5">
          <div class="footer_menu_widget text-start text-md-end mt15">
            
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
<a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"></script>
<script src="{{ asset('assets/js/googlemaps1.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('assets/js/script.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainImage = document.getElementById('mainCarImage');
    const thumbnails = document.querySelectorAll('.gallery-thumb');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const newSrc = this.getAttribute('data-image');
            mainImage.src = newSrc;

            // Optional: Add a small transition effect
            mainImage.style.opacity = 0;
            setTimeout(() => {
                mainImage.src = newSrc;
                mainImage.style.opacity = 1;
            }, 150);

            // Optional: Add an active border highlight
            thumbnails.forEach(t => t.classList.remove('active-thumb'));
            this.classList.add('active-thumb');
        });
    });
});
</script>
</body>
</html>