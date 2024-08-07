<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level_satisfaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function satisfaction(){
        return $this->belongsTo(Satisfaction::class);
    }
}
