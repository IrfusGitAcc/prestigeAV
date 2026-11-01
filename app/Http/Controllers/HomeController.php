<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    public function index(){
        $cars = Car::latest()->take(8)->get();
        return view('frontend.index',compact('cars'));
    }

    public function carInfo($carId){
        $car = Car::findOrFail($carId);
        $galleryImages = is_array($car->gallery_images)
        ? $car->gallery_images
        : json_decode($car->gallery_images, true);

        return view('frontend.car-details',compact('car', 'galleryImages'));
    }

    public function aboutUs(){
        return view('frontend.about-us');
    }

    public function contactUs(){
        return view('frontend.contact-us');
    }

    public function carStock(){
        $cars = Car::latest()->paginate(8);
        $totalCars = Car::count();
        return view('frontend.car-stock',compact('cars','totalCars'));
    }
}
