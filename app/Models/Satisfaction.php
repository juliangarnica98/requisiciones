<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satisfaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function level_satifactions(){
        return $this->hasMany(Level_satisfaction::class);
    }

    public function question_satifactions(){
        return $this->hasMany(Question_satisfaction::class);
    }

    public function retreals(){
        return $this->hasMany(Retreal::class);
    }
}
