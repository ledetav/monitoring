<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'key'
    ];

    public function users() {
        return $this->belongsToMany(User::class, 'keys', 'station_id', 'user_id');
    }
}
