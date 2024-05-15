<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    protected $connection = 'mysql90';
    
    protected $fillable = [
        'description',
    ];

    public function question() {
        return $this->hasMany(Question::class);
      }
}
