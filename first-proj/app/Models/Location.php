<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Testing\Fluent\Concerns\Has;

class Location extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['image','name','description','status','region_id'];
    function regions(){
      return $this->belongsTo(Region::class ,'region_id', 'id');
    }
}
