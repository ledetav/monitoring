<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Effective extends Model
{
    use HasFactory;

    protected $fillable = [
        'station_id',
        'measurement_id',
        'effective_power_on',
        'effective_power_off',
        'effective',
    ];
    public function measurement() {
        return $this->hasOne(Measurement::class, 'measurement_id');
    }
}
