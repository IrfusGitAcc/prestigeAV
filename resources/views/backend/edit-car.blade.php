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
<title>Prestige Auto Vehicle|Edit Car Listing</title>
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
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger " style="float: right;margin-top: 14px;">
                            <i class="flaticon-logout"></i> Log Out
                        </button>
                    </form>
                </div>
            </nav>
        </header>
        <!-- Main Header Nav For Mobile -->
  <div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
      <div class="header stylehome1">
        
        <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" 
         src="assets/images/prestige_logo_white.png" alt="prestige_logo_white.png"></div>
      </div>
    </div>
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
                                            <li><a  href="{{ route('dashboard') }}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                                            
                                            <li><a class="active" href="{{ route('car.list') }}"><span class="flaticon-list"></span>Car Listing</a></li>
                                          
                                            
                                            <li><a href="page-login.html"><span class="flaticon-logout"></span>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-lg mt50">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									
									<ul id="myDropdown" class="dropdown-content">
                                            <li><a class="active" href="{{ route('dashboard') }}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                                            
                                            <li><a href="{{ route('car.list') }}"><span class="flaticon-list"></span>Car Listing</a></li>
                                          
                                        </ul>
								</div>
							</div>
						</div>
					</div>
                        <div class="row">
						    <div class="col-xl-8">
                                <div class="col-lg-12 mb20">
                                    <div class="breadcrumb_content">
                                        <h2 class="breadcrumb_title">Edit Car </h2>
                                    </div>
                                </div>
						    </div>
					    </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                                    <div class="row">
                                        <div class="col-lg-12"></div>
                                        <!-- Tab panes -->
                                        <div class="col-lg-12 mt20">
                                            <form action="{{ route('update.car',$car->car_id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <div class="row">
                                                    <!-- Car Name -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="car_name" class="form-label">Car Name *</label>
                                                        <input type="text" class="form-control" id="car_name" name="car_name" value="{{ old('car_name', $car->car_name) }}"required>
                                                    </div>
                            
                                                    <!-- Make -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="make" class="form-label">Make</label>
                                                        <input type="text" class="form-control" id="make" name="make" value="{{ old('make', $car->make) }}">
                                                    </div>
                            
                                                    <!-- Model -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="model" class="form-label">Model</label>
                                                        <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model) }}">
                                                    </div>
                            
                                                    <!-- Variant -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="variant" class="form-label">Variant</label>
                                                        <input type="text" class="form-control" id="variant" name="variant" value="{{ old('variant', $car->variant) }}">
                                                    </div>
                            
                                                    <!-- Mileage -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="mileage" class="form-label">Mileage</label>
                                                        <input type="number" step="0.01" class="form-control" id="mileage" name="mileage" value="{{ old('mileage', $car->mileage) }}">
                                                    </div>
                            
                                                    <!-- Price -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="price" class="form-label">Price</label>
                                                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $car->price) }}">
                                                    </div>
                            
                                                    <!-- Year -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="year" class="form-label">Year</label>
                                                        <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $car->year) }}">
                                                    </div>
                            
                                                    <!-- Registration Number -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="reg_number" class="form-label">Registration Number</label>
                                                        <input type="text" class="form-control" id="reg_number" name="reg_number" value="{{ old('reg_number', $car->reg_number) }}">
                                                    </div>
                            
                                                    <!-- VIN -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="vin" class="form-label">VIN</label>
                                                        <input type="text" class="form-control" id="vin" name="vin" value="{{ old('vin', $car->vin) }}">
                                                    </div>
                            
                                                    <!-- Fuel Type -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="fuel_type" class="form-label">Fuel Type</label>
                                                        <input type="text" class="form-control" id="fuel_type" name="fuel_type" value="{{ old('fuel_type', $car->fuel_type) }}">
                                                    </div>
                            
                                                    <!-- Transmission -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="transmission" class="form-label">Transmission</label>
                                                        <input type="text" class="form-control" id="transmission" name="transmission" value="{{ old('transmission', $car->transmission) }}">
                                                    </div>
                            
                                                    <!-- Body Type -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="body_type" class="form-label">Body Type</label>
                                                        <input type="text" class="form-control" id="body_type" name="body_type" value="{{ old('body_type', $car->body_type) }}">
                                                    </div>
                            
                                                    <!-- Doors -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="doors" class="form-label">Doors</label>
                                                        <input type="number" class="form-control" id="doors" name="doors" value="{{ old('doors', $car->doors) }}">
                                                    </div>
                            
                                                    <!-- Seats -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="seats" class="form-label">Seats</label>
                                                        <input type="number" class="form-control" id="seats" name="seats" value="{{ old('seats', $car->seats) }}">
                                                    </div>
                            
                                                    <!-- Engine Size -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="engine_size" class="form-label">Engine Size</label>
                                                        <input type="number" class="form-control" id="engine_size" name="engine_size" value="{{ old('engine_size', $car->engine_size) }}">
                                                    </div>
                            
                                                    <!-- Horsepower -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="hp" class="form-label">HP</label>
                                                        <input type="number" class="form-control" id="hp" name="hp" value="{{ old('hp', $car->hp) }}">
                                                    </div>
                            
                                                    <!-- Color -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="color" class="form-label">Color</label>
                                                        <input type="text" class="form-control" id="color" name="color" value="{{ old('color', $car->color) }}">
                                                    </div>
                            
                                                    <!-- Drive Type -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="drive_type" class="form-label">Drive Type</label>
                                                        <input type="text" class="form-control" id="drive_type" name="drive_type" value="{{ old('drive_type', $car->drive_type) }}">
                                                    </div>
                            
                                                    <!-- Condition -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="condition" class="form-label">Condition</label>
                                                        <input type="text" class="form-control" id="condition" name="condition" value="{{ old('condition', $car->condition) }}">
                                                    </div>
                            
                                                    <!-- Cylinder -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cylinder" class="form-label">Cylinder</label>
                                                        <input type="text" class="form-control" id="cylinder" name="cylinder" value="{{ old('cylinder', $car->cylinder) }}">
                                                    </div>
                            
                                                    <!-- Stock -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="stock" class="form-label">Stock</label>
                                                        <input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock', $car->stock) }}">
                                                    </div>
                            
                                                    <!-- Description -->
                                                    <div class="col-12 mb-3">
                                                        <label for="description" class="form-label">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $car->description) }}</textarea>

                                                    </div>
                            
                                                    <!-- Main Image -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="main_image" class="form-label">Main Image</label>
                                                        <input type="file" class="form-control" id="main_image" name="main_image">
                                                    </div>
                            
                                                    <!-- Gallery Images -->
                                                    <div class="col-md-6 mb-3">
                                                        <label for="gallery_images" class="form-label">Gallery Images</label>
                                                        <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label d-block">Current Main Image</label>
                                                        @if(!empty($car->main_image))
                                                            <div id="mainImageBox">
                                                                <img src="{{ asset('assets/images/listing/' . $car->main_image) }}" width="200" class="img-thumbnail">

                                                                <button class="btn btn-danger btn-sm mt-2" id="deleteMainImageBtn"
                                                                    data-id="{{ $car->car_id }}">
                                                                    Delete Main Image
                                                                </button>
                                                            </div>
                                                        @else
                                                            <p class="text-muted">No main image uploaded.</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label d-block">Current Gallery Images</label>
                                                        <div class="d-flex flex-wrap gap-2 mb-2" id="galleryContainer">
                                                            @if(!empty($car->gallery_images) && is_array($car->gallery_images))
                                                                @foreach($car->gallery_images as $image)
                                                                    <div class="gallery-item" id="gallery-{{ $image }}" style="display:inline-block;">
                                                                        <img src="{{ asset('assets/images/gallery/' . $image) }}" width="100" class="img-thumbnail">

                                                                        <button class="btn btn-danger btn-sm mt-1 deleteGalleryBtn"
                                                                            data-id="{{ $car->car_id }}"
                                                                            data-image="{{ $image }}">
                                                                                Delete
                                                                        </button>
                                                                    </div>
                                                                @endforeach
                                                            @else
                                                                <p class="text-muted">No gallery images uploaded.</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-addcar">Save Car</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                           
                            <!-- Wrapper End -->
    <script src="{{ asset('assets/js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
        
            // ---------------------------------------
            // DELETE MAIN IMAGE (AJAX)
            // ---------------------------------------
            $('#deleteMainImageBtn').on('click', function () {
                let carId = $(this).data('id');
        
                if (!confirm("Delete main image?")) return;
        
                $.ajax({
                    url: "/car/" + carId + "/delete-main-image",
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        $('#mainImageBox').remove();  // Remove from UI
                        alert("Main image deleted!");
                    },
                    error: function () {
                        alert("Error deleting main image");
                    }
                });
            });
        
        
            // ---------------------------------------
            // DELETE GALLERY IMAGE (AJAX)
            // ---------------------------------------
            $('.deleteGalleryBtn').on('click', function () {
        
                let carId = $(this).data('id');
                let image = $(this).data('image');
        
                if (!confirm("Delete this gallery image?")) return;
        
                $.ajax({
                    url: "/car/" + carId + "/delete-gallery-image/" + image,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        $("#gallery-" + image).fadeOut(300, function () {
                            $(this).remove(); // Remove from UI
                        });
                        alert("Gallery image deleted!");
                    },
                    error: function () {
                        alert("Error deleting gallery image");
                    }
                });
            });
        
        });
    </script>
</body>
</html>