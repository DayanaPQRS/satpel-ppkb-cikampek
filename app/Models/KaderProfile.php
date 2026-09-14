<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaderProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'phone',
        'village',
        'dusun',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
