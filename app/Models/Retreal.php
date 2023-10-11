<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retreal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function retirement_positions(){
        return $this->hasOne(Retirement_position::class, 'id','retirement_positions_id');
    }
    public function retirement_cities(){
        return $this->hasOne(Retirement_city::class, 'id','retirement_city_id');
    }
    public function satisfation(){
        return $this->belongsTo(Satisfaction::class);
    }
}
