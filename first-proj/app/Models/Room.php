<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function orders() {
        return $this->hasMany(Order::class, 'room_id', 'id');
    }
}
