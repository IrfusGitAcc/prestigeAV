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
<link rel="stylesheet" href="{{ asset('assets/css/dashbord_navitaion.css') }}">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Title -->
<title>Voiture - Automotive & Car Dealer HTML Template</title>
<!-- Favicon -->
<link href="{{ asset('assets/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{ asset('assets/images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />

</head>
<body>
    <div class="wrapper">
        <!-- header top -->
        <div class="header_top home3_style dashbord_style dn-992">
            <div class="container-fluid">
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
        <header class="header-nav menu_style_home_one home3_style dashbord_style main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr"> 
                <div class="container-fluid"> 
                    <!-- Menu Toggle btn-->
                    <div class="menu-toggle">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="{{ route('home') }}" class="navbar_brand float-start dn-md">
                        <img class="logo1 img-fluid" style="max-width: 26%;"
                            src="{{ asset('assets/images/prestige_logo.png') }}" 
                            alt="prestige_logo.png">
                    </a>
                </div>
            </nav>
        </header>
        <!-- Our Dashbord -->
	      <section class="our-dashbord dashbord bgc-f9">
	    	    <div class="container-fluid">
	    		      <div class="row">
	    	            <div class="col-xxl-10 offset-xxl-2 dashboard_grid_space">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="extra-dashboard-menu dn-lg">
                                    <div class="ed_menu_list">
                                        <ul>
                                            <li><a class="active" href="{{ route('dashboard') }}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                                            
                                            <li><a href="{{ route('car.list') }}"><span class="flaticon-list"></span>Car Listing</a></li>
                                          
                                            <li><a href="page-dashboard-add-listings.html"><span class="flaticon-plus"></span>Add Listing</a></li>
                                            <li><a href="page-dashboard-messages.html"><span class="flaticon-message"></span>Messages</a></li>
                                            <li><a href="page-login.html"><span class="flaticon-logout"></span>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
	    				          <div class="row">
	    					            <div class="col-xl-8">
                                <div class="breadcrumb_content mb50">
                                    <h2 class="breadcrumb_title">Hello, Admin!</h2>
                                </div>
	    					            </div>
	    				          </div>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="ff_one">
                                    <div class="icon"><span class="flaticon-list"></span></div>
                                    <div class="detais text-end">
                                        <div class="timer">1260</div>
                                            <p class="para">Total Listing</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-sm-6 col-lg-4">
                        <div class="ff_one style2">
                    <div class="icon"><span class="flaticon-message"></span></div>
                    <div class="detais text-end">
                      <div class="timer">74</div>
                      <p class="para">Messages</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div class="ff_one style3">
                    <div class="icon"><span class="flaticon-heart"></span></div>
                    <div class="detais text-end">
                      <div class="timer">20</div>
                      <p class="para">Favorites</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-xl-7">
                  <div class="application_statics">
                    <h4>Your Profile Views</h4>
                    <div class="c_container"></div>
                  </div>
                </div>
                <div class="col-xl-5">
                  <div class="recent_job_activity">
                    <h4 class="title">Recent Activities</h4>
                    <div class="grid d-block d-sm-flex">
                      <div class="icon blue"><span><img src="assets/images/icon/briefcase-blue.svg" alt="briefcase-blue.svg"></span></div>
                      <p class="mb0"><span class="heading-color">Wade Warren</span> add list for a car <span class="color-blue">Audi a3 Sportback 2020</span></p>
                    </div>
                    
                  </div>
                </div>
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
<script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/chart-custome.js') }}"></script>
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
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard-script.js') }}"></script>
<!-- Custom script for all pages --> 
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>