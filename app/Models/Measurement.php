<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'station_id',
        'time_start',
        'time_end',
        'reactive_powerA',
        'reactive_powerB',
        'reactive_powerC',
        'active_powerA',
        'active_powerB',
        'active_powerC',
        'voltageA',
        'voltageB',
        'voltageC',
        'cosA',
        'cosB',
        'cosC',
        'reactive_powerA_off',
        'reactive_powerB_off',
        'reactive_powerC_off',
        'active_powerA_off',
        'active_powerB_off',
        'active_powerC_off',
        'voltageA_off',
        'voltageB_off',
        'voltageC_off',
        'cosA_off',
        'cosB_off',
        'cosC_off',
        'enabled_blocks',
    ];
}
