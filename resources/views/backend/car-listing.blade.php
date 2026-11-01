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
<title>Prestige Auto Vehicle | Car Listing</title>
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
                                            <li><a  href="{{ route('dashboard') }}"><span class="flaticon-dashboard"></span>Dashboard</a></li>
                                            
                                            <li><a class="active" href="{{ route('car.list') }}"><span class="flaticon-list"></span>Car Listing</a></li>
                                          
                                            
                                            <li><a href="page-login.html"><span class="flaticon-logout"></span>Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
	    				   
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif      
					    <div class="row">
						    <div class="col-xl-8">
                                <div class="col-lg-12 mb20">
                                    <div class="breadcrumb_content">
                                        <h2 class="breadcrumb_title">Car Listing</h2>
                                    </div>
                                </div>
						    </div>
                            <div class="col-12 col-md-4 col-xl-4 text-md-end">
                                <button type="button" class="btn btn-addcar" data-bs-toggle="modal" data-bs-target="#addCarModal">
                                    Add New Car
                                </button>
                            </div>
					    </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard_favorites_contents dashboard_my_lising_tabs p10-520">
                                    <div class="row">
                                        <div class="col-lg-12"></div>
                                        <!-- Tab panes -->
                                        <div class="col-lg-12 mt20">
                                            <div class="tab-content row" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive my_lisging_table">
                                                            <table class="table">
                                                                <thead class="table-light">
                                                                    <tr class="thead_row">
                                                                        <th class="thead_title pl20" scope="col">Car</th>
                                                                        <th class="thead_title" scope="col">Make</th>
                                                                        <th class="thead_title" scope="col">Model</th>
                                                                        <th class="thead_title" scope="col">Year</th>
                                                                        <th class="thead_title" scope="col">Transmission</th>
                                                                        <th class="thead_title" scope="col">Fuel Type</th>
                                                                        <th class="thead_title" scope="col">Date</th>
                                                                        <th class="thead_title" scope="col">Action</th>
                                                                    </tr>
                                                                </thead>
                                                            
                                                                <tbody>
                                                                    @foreach ($cars as $car)
                                                                        <tr>
                                                                            <th class="align-middle pl20" scope="row">
                                                                                <div class="car-listing bdr_none d-flex mb0">
                                                                                    <div class="thumb w150">
                                                                                        <img class="img-fluid"
                                                                                             src="{{ asset('assets/images/listing/' . $car->main_image) }}"
                                                                                             
                                                                                             alt="{{ $car->car_name }}">
                                                                                    </div>
                                                                                    <div class="details ms-1">
                                                                                        <h6 class="title">
                                                                                            <a href="">
                                                                                                {{ $car->car_name }} - {{ $car->year }}
                                                                                            </a>
                                                                                        </h6>
                                                                                        <h5 class="price">£{{ number_format($car->price, 2) }}</h5>
                                                                                    </div>
                                                                                </div>
                                                                            </th>
                                                            
                                                                            <td class="align-middle">{{ $car->make }}</td>
                                                                            <td class="align-middle">{{ $car->model }}</td>
                                                                            <td class="align-middle">{{ $car->year }}</td>
                                                                            <td class="align-middle">{{ $car->transmission }}</td>
                                                                            <td class="align-middle">{{ $car->fuel_type }}</td>
                                                            
                                                                            <td class="align-middle">{{ $car->created_at ? $car->created_at->format('d M Y') : 'N/A' }}</td>
                                                            
                                                                            <td class="align-middle">
                                                                                <ul class="list-inline mb-0">
                                                                                    
                                                                                    <li class="list-inline-item">
                                                                                        <a href="{{ route('edit.car',$car->car_id) }}"
                                                                                           data-bs-toggle="tooltip" title="Edit">
                                                                                           <span class="flaticon-pen"></span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="list-inline-item">
                                                                                        <form action="" method="POST" style="display:inline;">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button type="submit"
                                                                                                    onclick="return confirm('Are you sure you want to delete this car?')"
                                                                                                    class="border-0 bg-transparent text-danger"
                                                                                                    data-bs-toggle="tooltip" title="Delete">
                                                                                                <span class="flaticon-trash"></span>
                                                                                            </button>
                                                                                        </form>
                                                                                    </li>
                                                                                </ul>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="mbp_pagination mt10">
                                                        {{-- Laravel pagination links --}}
                                                            <div class="d-flex justify-content-center">
                                                                 {{ $cars->links('pagination::bootstrap-5') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <!-- Add Car Modal -->
<div class="modal fade" id="addCarModal" tabindex="-1" aria-labelledby="addCarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCarModalLabel">Add New Car</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form goes here -->
                <form action="{{ route('store.car') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="row">
                        <!-- Car Name -->
                        <div class="col-md-6 mb-3">
                            <label for="car_name" class="form-label">Car Name *</label>
                            <input type="text" class="form-control" id="car_name" name="car_name" required>
                        </div>

                        <!-- Make -->
                        <div class="col-md-6 mb-3">
                            <label for="make" class="form-label">Make</label>
                            <input type="text" class="form-control" id="make" name="make">
                        </div>

                        <!-- Model -->
                        <div class="col-md-6 mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" name="model">
                        </div>

                        <!-- Variant -->
                        <div class="col-md-6 mb-3">
                            <label for="variant" class="form-label">Variant</label>
                            <input type="text" class="form-control" id="variant" name="variant">
                        </div>

                        <!-- Mileage -->
                        <div class="col-md-6 mb-3">
                            <label for="mileage" class="form-label">Mileage</label>
                            <input type="number" step="0.01" class="form-control" id="mileage" name="mileage">
                        </div>

                        <!-- Price -->
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price">
                        </div>

                        <!-- Year -->
                        <div class="col-md-6 mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="text" class="form-control" id="year" name="year">
                        </div>

                        <!-- Registration Number -->
                        <div class="col-md-6 mb-3">
                            <label for="reg_number" class="form-label">Registration Number</label>
                            <input type="text" class="form-control" id="reg_number" name="reg_number">
                        </div>

                        <!-- VIN -->
                        <div class="col-md-6 mb-3">
                            <label for="vin" class="form-label">VIN</label>
                            <input type="text" class="form-control" id="vin" name="vin">
                        </div>

                        <!-- Fuel Type -->
                        <div class="col-md-6 mb-3">
                            <label for="fuel_type" class="form-label">Fuel Type</label>
                            <input type="text" class="form-control" id="fuel_type" name="fuel_type">
                        </div>

                        <!-- Transmission -->
                        <div class="col-md-6 mb-3">
                            <label for="transmission" class="form-label">Transmission</label>
                            <input type="text" class="form-control" id="transmission" name="transmission">
                        </div>

                        <!-- Body Type -->
                        <div class="col-md-6 mb-3">
                            <label for="body_type" class="form-label">Body Type</label>
                            <input type="text" class="form-control" id="body_type" name="body_type">
                        </div>

                        <!-- Doors -->
                        <div class="col-md-6 mb-3">
                            <label for="doors" class="form-label">Doors</label>
                            <input type="number" class="form-control" id="doors" name="doors">
                        </div>

                        <!-- Seats -->
                        <div class="col-md-6 mb-3">
                            <label for="seats" class="form-label">Seats</label>
                            <input type="number" class="form-control" id="seats" name="seats">
                        </div>

                        <!-- Engine Size -->
                        <div class="col-md-6 mb-3">
                            <label for="engine_size" class="form-label">Engine Size</label>
                            <input type="number" class="form-control" id="engine_size" name="engine_size">
                        </div>

                        <!-- Horsepower -->
                        <div class="col-md-6 mb-3">
                            <label for="hp" class="form-label">HP</label>
                            <input type="number" class="form-control" id="hp" name="hp">
                        </div>

                        <!-- Color -->
                        <div class="col-md-6 mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color">
                        </div>

                        <!-- Drive Type -->
                        <div class="col-md-6 mb-3">
                            <label for="drive_type" class="form-label">Drive Type</label>
                            <input type="text" class="form-control" id="drive_type" name="drive_type">
                        </div>

                        <!-- Condition -->
                        <div class="col-md-6 mb-3">
                            <label for="condition" class="form-label">Condition</label>
                            <input type="text" class="form-control" id="condition" name="condition">
                        </div>

                        <!-- Cylinder -->
                        <div class="col-md-6 mb-3">
                            <label for="cylinder" class="form-label">Cylinder</label>
                            <input type="text" class="form-control" id="cylinder" name="cylinder">
                        </div>

                        <!-- Stock -->
                        <div class="col-md-6 mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="1">
                        </div>

                        <!-- Description -->
                        <div class="col-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
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
                    </div>
                    <button type="submit" class="btn btn-addcar">Save Car</button>
                </form>
            </div>
        </div>
    </div>
</div>
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
</body>
</html>