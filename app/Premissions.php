<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Premissions extends Model
{
    public function user()
    {
        return $this->hasMany('App\User', 'is_admin','is_admin');
    }
}
