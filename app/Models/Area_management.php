<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area_management extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function administrations(){
        return $this->hasMany(Administration::class);
    }
    public function management(){
        return $this->belongsTo(Management::class);
    }
}
