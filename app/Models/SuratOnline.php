<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratOnline extends Model
{
    use HasFactory;

    protected $table = 'surat_online';

    protected $fillable = [
        'user_id',
        'type',
        'status',
        'file_path',
        'keterangan',
    ];

    /**
     * Get the user that owns the surat online request.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 