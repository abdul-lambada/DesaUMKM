<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapPoint extends Model
{
    use HasFactory;

    protected $table = 'map_points';

    protected $fillable = [
        'title',
        'type',
        'lat',
        'lng',
        'related_id',
    ];

    protected $casts = [
        'lat' => 'decimal:8',
        'lng' => 'decimal:8',
    ];
} 