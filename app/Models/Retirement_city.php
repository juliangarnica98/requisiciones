<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirement_city extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function retreal(){
        return $this->belongsTo(Retreal::class);
    }
}
