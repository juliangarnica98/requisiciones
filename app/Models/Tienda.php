<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function regional(){
        return $this->belongsTo(Regional::class);
    }
}
