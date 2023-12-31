<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'phone',
        'password',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static $rules = [
        'email' => 'required|email|unique:users',
        'phone' => 'required|unique:users',
    ];

    public function setPasswordAttribute($value)
{
    $this->attributes['password'] = bcrypt($value);
}


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function adresses()
    {
        return $this->hasMany(Address::class);
    }

    
}
