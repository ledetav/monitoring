<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effective extends Model
{
    use HasFactory;

    public function measurement() {
        return $this->hasOne(Measurement::class, 'measurement_id');
    }
}
