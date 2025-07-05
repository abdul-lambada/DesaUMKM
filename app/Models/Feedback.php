<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'user_id',
        'message',
        'category',
        'status',
    ];

    /**
     * Get the user that submitted the feedback.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 