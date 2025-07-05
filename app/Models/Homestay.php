<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'price_per_night',
        'contact',
        'image',
        'status',
    ];

    protected $casts = [
        'price_per_night' => 'decimal:2',
    ];

    /**
     * Get the bookings for the homestay.
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
} 