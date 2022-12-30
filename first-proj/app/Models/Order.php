<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name', 'email', 'enquiry', 'messages'
    ];

//    protected $primaryKey = 'id';
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function region() {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
