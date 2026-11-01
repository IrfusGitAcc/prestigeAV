<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class AdminController extends Controller
{
    public function dashboard(){
        return view('backend.dashboard');
    }

    public function carListing(){
        $cars = Car::all();
        return view('backend.car-listing',compact('cars'));
    }

    public function storeCar(Request $request){
        $carData = $request->validate([
            'car_name'        => 'required|string|max:255',
            'description'     => 'nullable|string',
            'make'            => 'nullable|string',
            'model'           => 'nullable|string',
            'varient'         => 'nullable|string',
            'price'           => 'nullable|numeric',
            'mileage'         => 'nullable|numeric',
            'year'            => 'nullable|string|max:10',
            'fuel_type'       => 'nullable|string',
            'body_type'       => 'nullable|string',
            'reg_number'      => 'nullable|string|max:255|unique:cars,reg_number',
            'vin'             => 'nullable|string',
            'transmission'    => 'nullable|string',
            'doors'           => 'nullable|integer',
            'seats'           => 'nullable|integer',
            'engine_size'     => 'nullable|integer',
            'hp'              => 'nullable|integer',
            'color'           => 'nullable|string|max:255',
            'drive_type'      => 'nullable|string|max:255',
            'condition'       => 'nullable|string|max:255',
            'cylinder'        => 'nullable|string|max:255',
            'stock'           => 'nullable|integer|min:0',
            'description'     => 'nullable|string',
            'main_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gallery_images.*'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);
        $imagePath = null;
        if($request->hasFile('main_image')){
            $mainImage = $request->file('main_image');
            $mainImageName = time() . '_' . uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('assets/images/listing/'), $mainImageName);
            $imagePath = $mainImageName;
        }
        
        $galleryPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/gallery/'), $imageName);
                $galleryPaths[] =  $imageName;
            }
        }

         // ✅ Save car record
        $car = Car::create([
            'car_name' => $carData['car_name'],
            'make' => $carData['make'] ?? null,
            'model' => $carData['model'] ?? null,
            'variant' => $carData['variant'] ?? null,
            'mileage' => $carData['mileage'] ?? null,
            'price' => $carData['price'] ?? null,
            'year' => $carData['year'] ?? null,
            'reg_number' => $carData['reg_number'] ?? null,
            'vin' => $carData['vin'] ?? null,
            'fuel_type' => $carData['fuel_type'] ?? null,
            'transmission' => $carData['transmission'] ?? null,
            'body_type' => $carData['body_type'] ?? null,
            'doors' => $carData['doors'] ?? null,
            'seats' => $carData['seats'] ?? null,
            'engine_size' => $carData['engine_size'] ?? null,
            'hp' => $carData['hp'] ?? null,
            'color' => $carData['color'] ?? null,
            'drive_type' => $carData['drive_type'] ?? null,
            'condition' => $carData['condition'] ?? null,
            'cylinder' => $carData['cylinder'] ?? null,
            'stock' => $carData['stock'] ?? 1,
            'description' => $carData['description'] ?? null,
            'main_image' => $imagePath,
            'gallery_images' => $galleryPaths ?: null,
        ]);

        return redirect()->back()->with('success', 'Car added successfully!');
        
    }

    public function editCar($carId){
        $car = Car::findOrFail($carId);
        return view('backend.edit-car',compact('car'));
    }

    public function updateCar(Request $request, $carId){

        $car = Car::findOrFail($carId);
    
        $carData = $request->validate([
            'car_name'        => 'required|string|max:255',
            'description'     => 'nullable|string',
            'make'            => 'nullable|string',
            'model'           => 'nullable|string',
            'variant'         => 'nullable|string',
            'price'           => 'nullable|numeric',
            'mileage'         => 'nullable|numeric',
            'year'            => 'nullable|string|max:10',
            'fuel_type'       => 'nullable|string',
            'body_type'       => 'nullable|string',
            'reg_number'      => 'nullable|string|max:255|unique:cars,reg_number,' . $carId . ',car_id',
            'vin'             => 'nullable|string',
            'transmission'    => 'nullable|string',
            'doors'           => 'nullable|integer',
            'seats'           => 'nullable|integer',
            'engine_size'     => 'nullable|integer',
            'hp'              => 'nullable|integer',
            'color'           => 'nullable|string|max:255',
            'drive_type'      => 'nullable|string|max:255',
            'condition'       => 'nullable|string|max:255',
            'cylinder'        => 'nullable|string|max:255',
            'stock'           => 'nullable|integer|min:0',
            'main_image'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'gallery_images.*'=> 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
    
        // ✅ Handle Main Image Update
        if ($request->hasFile('main_image')) {
            // Delete old image if exists
            if ($car->main_image && file_exists(public_path('assets/images/listing/' . $car->main_image))) {
                unlink(public_path('assets/images/listing/' . $car->main_image));
            }
    
            $mainImage = $request->file('main_image');
            $mainImageName = time() . '_' . uniqid() . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->move(public_path('assets/images/listing/'), $mainImageName);
            $carData['main_image'] = $mainImageName;
        } else {
            // Keep old main image
            $carData['main_image'] = $car->main_image;
        }
    
        // ✅ Handle Gallery Images (append new ones)
        $galleryPaths = $car->gallery_images ?? [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/images/gallery/'), $imageName);
                $galleryPaths[] = $imageName;
            }
        }
        $carData['gallery_images'] = $galleryPaths;
    
        // ✅ Update car
        $car->update($carData);
    
        return redirect()->route('car.list')->with('success', 'Car details updated successfully!');
    }
    
    public function deleteCar($carId){
        $car =Car::findOrfail($carId);
        if (!$car) {
            return redirect()->back()->with('error', 'Car not found.');
        }
    
        $car->delete(); 
        return redirect()->back()->with('success', 'Car deleted successfully.');

    }

    public function deleteMainImage($carId){

        $car = Car::findOrFail($carId);
    
        if ($car->main_image && file_exists(public_path('assets/images/listing/' . $car->main_image))) {
            unlink(public_path('assets/images/listing/' . $car->main_image));
        }
    
        $car->main_image = null;
        $car->save();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Main image deleted successfully'
        ]);
    }
    
    public function deleteGalleryImage($carId, $image){
        
        $car = Car::findOrFail($carId);
    
        $gallery = $car->gallery_images ?? [];
    
        // Remove from array
        if (($key = array_search($image, $gallery)) !== false) {
            unset($gallery[$key]);
        }
    
        // Delete physical file
        if (file_exists(public_path('assets/images/gallery/' . $image))) {
            unlink(public_path('assets/images/gallery/' . $image));
        }
    
        // Save updated gallery
        $car->gallery_images = array_values($gallery);
        $car->save();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Gallery image deleted successfully'
        ]);
    }


}
