<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    public function order() {

    	return $this->belongsTo('App\Order');
    	
    }
}