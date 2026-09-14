<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KbRecord extends Model
{
    /** @use HasFactory<\Database\Factories\KbRecordFactory> */
    use HasFactory;

    protected $guarded = ['id'];
}
