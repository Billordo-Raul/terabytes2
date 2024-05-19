<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\UserData;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name','username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the userdata associated with the userdata
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userdata()
    {
        return $this->hasOne(UserData::class, 'user_id', 'id');
    }

    /* Functions Aux */

    public function isAdminUser(){
        return (auth()->user()->hasRole(['Administrator','User']));
        /* if(auth()->user()->hasRole(['Administrator','User'])) return true;
        return false; */
    }

    public function isClient(){
        return (auth()->user()->hasRole('Client'));
    }

}
