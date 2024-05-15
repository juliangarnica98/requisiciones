<?php

namespace App\Models\Api;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $connection = 'mysql90';

    protected $fillable = [
        'week',
        'description_ans',
        'description_que',
        'status',
    ];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
    public function question()
    {
      return $this->belongsTo(Question::class);
    }

}
