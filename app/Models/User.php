<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Model
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    public function stations() {
        return $this->belongsToMany(Station::class, 'keys', 'user_id', 'station_id');
    }
}
