<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BumilRecord extends Model
{
    /** @use HasFactory<\Database\Factories\BumilRecordFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'form_data' => 'array',
    ];
}
