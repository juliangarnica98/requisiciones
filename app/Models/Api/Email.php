<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $connection = 'mysql90';

    protected $fillable = [
        'week',
        'user_id',
        'created_user_at'
    ];
}
