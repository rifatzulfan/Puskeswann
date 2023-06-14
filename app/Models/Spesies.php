<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesies extends Model
{
    use HasFactory;

    public function hewans()
    {
        return $this->hasMany(Booking::class);
    }
}
