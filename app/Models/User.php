<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // mencegah eror defeault value
    // nama variabel harus quarded jika itu kita yng mengipnut
    // jika user yang input maka kita mengunakan fillabel, supaya aman terhindar dari hack.
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Mengambik route username
    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }

    public function setPasswordAttribute ($password)
    {
        return $this->attributes['password'] = bcrypt($password);
    }
}
