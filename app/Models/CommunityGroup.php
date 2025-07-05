<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommunityGroup extends Model
{
    use HasFactory;

    protected $table = 'community_groups';

    protected $fillable = [
        'name',
        'type',
        'description',
        'leader_name',
        'phone',
        'logo',
    ];
} 