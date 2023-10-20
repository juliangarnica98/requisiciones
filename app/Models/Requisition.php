<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function administrations(){
        return $this->hasMany(Administration::class);
    }
    public function stores(){
        return $this->hasMany(Store::class);
    }
    public function cedis(){
        return $this->hasMany(Cedi::class);
    }
    public function factories(){
        return $this->hasMany(Factory::class);
    }
    public function national_sales(){
        return $this->hasMany(National_sale::class);
    }

    
}
