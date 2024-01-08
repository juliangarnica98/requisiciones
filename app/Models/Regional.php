<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function stores(){
        return $this->hasMany(Store::class);
    }
    public function tiendas(){
        return $this->hasMany(Tienda::class);
    }
}
