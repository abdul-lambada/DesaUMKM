<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'image_path',
        'uploaded_by',
    ];

    /**
     * Get the user that uploaded the gallery item.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
} 