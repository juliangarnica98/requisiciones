<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql90';
    protected $table = 'regionals';

    protected $fillable = [
        'description',
        'status'
    ];
    public function stores(){
        return $this->hasMany(Store::class);
    }
}
