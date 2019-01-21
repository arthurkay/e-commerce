<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';


    public function images() {

        return $this->hasMany('App\ProfileImages');
        
    }
}
