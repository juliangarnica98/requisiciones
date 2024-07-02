<?php

namespace App\Models;

use App\Models\Api\Answer;
use App\Models\Api\Store;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'area',
        'email',
        'password',
        'regional',
        'type',
        'store_id',
        'cedula',
        'fecha_ingreso',
        'fecha_retiro',
        'razon_retiro',
        'status',
        'direccion'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function requisitions(){
        return $this->hasMany(Requisition::class);
    }

    public function answer() {
        return $this->hasMany(Answer::class);
    }
    public function store() {
        return $this->belongsTo(Store::class);
    }
}
