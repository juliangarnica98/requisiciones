<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area_factory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function factories(){
        return $this->hasMany(Factory::class);
    }
}
