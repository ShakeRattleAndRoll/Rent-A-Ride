<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Post a car part 

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_image',
        'date_owned',
        'brand',
        'model',
        'price',
        'rent_period',
        'transmission',
        'fuel_type',
        'description',
    ];
}