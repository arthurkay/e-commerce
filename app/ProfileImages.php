<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileImages extends Model
{
    protected $table = 'profile_images';

    protected $fillable = [
        'name'
    ];

    public function profile() {

        return $this->belongsTo("App\Profile");

    }
}
