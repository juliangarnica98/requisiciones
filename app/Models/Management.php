<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function administrations(){
        return $this->hasMany(Administration::class);
    }

    public function area_managements(){
        return $this->hasMany(Area_management::class);
    }
}
