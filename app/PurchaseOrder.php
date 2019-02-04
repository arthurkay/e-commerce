<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $table = 'purchase_orders';

    protected $fillable = [
    	'order_id',
    	'product_id',
    	'amount'
    ];

    public function order() {

    	return $this->belongsTo('App\Order');
    	
    }
}
