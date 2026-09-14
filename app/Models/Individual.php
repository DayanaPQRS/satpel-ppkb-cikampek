<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    /** @use HasFactory<\Database\Factories\IndividualFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function family()
    {
        return $this->belongsTo(Family::class);
    }

    public function classifications()
    {
        return $this->hasMany(Classification::class);
    }

    // specific programs
    public function pusRecord()
    {
        return $this->hasOneThrough(PusRecord::class, Classification::class);
    }

    public function kbRecord()
    {
        return $this->hasOneThrough(KbRecord::class, Classification::class);
    }

    public function bumilRecord()
    {
        return $this->hasOneThrough(BumilRecord::class, Classification::class);
    }

    public function badutaRecord()
    {
        return $this->hasOneThrough(BadutaRecord::class, Classification::class);
    }

    public function bulinRecord()
    {
        return $this->hasOneThrough(BulinRecord::class, Classification::class);
    }

    public function catinRecord()
    {
        return $this->hasOneThrough(CatinRecord::class, Classification::class);
    }

    public function getHasProgramClassificationAttribute()
    {
        return $this->classifications()->exists();
    }
}
