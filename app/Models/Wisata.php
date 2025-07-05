<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $table = 'wisata';

    protected $fillable = [
        'name',
        'description',
        'location',
        'ticket_price',
        'open_hours',
        'facilities',
        'rating',
        'lat',
        'lng',
        'image',
    ];

    protected $casts = [
        'ticket_price' => 'decimal:2',
        'rating' => 'decimal:2',
        'lat' => 'decimal:8',
        'lng' => 'decimal:8',
    ];
} 