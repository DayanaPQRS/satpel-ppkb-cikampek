<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PusRecord extends Model
{
    /** @use HasFactory<\Database\Factories\PusRecordFactory> */
    use HasFactory;
    
    protected $guarded = ['id'];
}
