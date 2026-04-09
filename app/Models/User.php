<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    public function role(){
        return $this->belongsTo(Role::class);
    }
}
