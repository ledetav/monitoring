<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'password',
    ];

    public function stations() {
        return $this->belongsToMany(Station::class, 'keys', 'user_id', 'station_id');
    }
}
