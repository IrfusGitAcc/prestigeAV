<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';

    protected $primaryKey = 'car_id';

    protected $fillable = [
        'car_name',
        'make',
        'model',
        'variant',
        'mileage',
        'price',
        'year',
        'reg_number',
        'vin',
        'fuel_type',
        'transmission',
        'body_type',
        'doors',
        'seats',
        'engine_size',
        'hp',
        'color',
        'drive_type',
        'condition',
        'cylinder',
        'stock',
        'description',
        'main_image',
        'gallery_images',
    ];

    protected $casts = [
        'gallery_images' => 'array',
    ];

}
