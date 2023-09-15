<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retreal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function retirement_positions(){
        return $this->hasMany(Retirement_position::class);
    }
    public function retirement_cities(){
        return $this->hasMany(Retirement_city::class);
    }
    public function satisfation(){
        return $this->belongsTo(Satisfaction::class);
    }
}
