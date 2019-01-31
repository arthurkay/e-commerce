<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function purchseOrder() {
    return $this->hasMany('App\PurchaseOrder');
    }
}
