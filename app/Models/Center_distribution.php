<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Center_distribution extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cedis(){
        return $this->hasMany(Cedi::class);
    }
}
