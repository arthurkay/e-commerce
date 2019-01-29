<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\PurchaseOrder;


class OrdersController extends Controller
{
    public function index() {
    	$title = "Matre Logistics LTD | Checkout";
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('home', compact(['title', 'cart']));
    }
}
