<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 
        'slug', 
        'type_id',
        'brand_id',
        'photos', 
        'features', 
        'price', 
        'star', 
        'review',
    ];

    protected $casts = [
        'photos' => 'array',
    ];

    // Brand
    public function brands()
    {
        return $this->belongsTo(Brand::class); // One to Many (Inverse atau kebalikannya) / Belongs To
    }

    // Type
    public function types()
    {
        return $this->belongsTo(Type::class); // One to Many (Inverse atau kebalikannya) / Belongs To
    }

    // Booking
    public function bookings()
    {
        return $this->hasMany(Booking::class); // One to Many
    }
}
