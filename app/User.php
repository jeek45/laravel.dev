<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Message;
use App\Premissions;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
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
        'is_admin',
    ];

    /*
     * user can have many message
     */
    public function message()
    {
        return $this->hasMany('App\Message');
    }

    public function premission()
    {
        return $this->belongsTo('App\Premissions', 'is_admin', 'is_admin');
    }

    public function getAttributeisadmin()
    {
        return $this->is_admin;
    }
    public function getAttributeid()
    {
        return $this->id;
    }
}
