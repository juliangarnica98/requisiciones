<?php

namespace App\Models\Api;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql90';

    protected $fillable = [
        'description',
        'status'
    ];
    
    public function regional(){
        return $this->belongsTo(Regional::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }
}
