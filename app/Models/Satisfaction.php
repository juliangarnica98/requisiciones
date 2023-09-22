<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satisfaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function level_satifactions(){
        return $this->hasMany(Level_satisfaction::class,'id','level_satisfaction_id');
    }

    public function question_satifactions(){
        return $this->hasMany(Question_satisfaction::class,'id','question_satisfaction_id');
    }

    public function retreals(){
        return $this->hasMany(Retreal::class);
    }
}
