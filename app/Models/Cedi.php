<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cedi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function requisition(){
        return $this->belongsTo(Requisition::class);
    }
    public function center_distribution(){
        return $this->belongsTo(Center_distribution::class);
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
