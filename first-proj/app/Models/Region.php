<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'region',
    ];

    public function locations() {
        return $this->hasMany(Location::class, 'region_id' ,'id');
    }

    public function orders() {
        return $this->hasMany(Order::class, 'region_id', 'id');
    }
}
