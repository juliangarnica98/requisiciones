<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class National_sale extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function requisition(){
        return $this->belongsTo(Requisition::class);
    }
    public function charge(){
        return $this->belongsTo(Charge::class);
    }
    public function activation_charge(){
        return $this->belongsTo(Activation_charge::class);
    }
    public function activation(){
        return $this->belongsTo(Activation::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function sex(){
        return $this->belongsTo(Sex::class);
    }
}
