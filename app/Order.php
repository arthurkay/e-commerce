<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function purchaseOrder() {
    return $this->hasMany('App\PurchaseOrder');
    }
}
