<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\PurchaseOrder;
use App\Order;
use Auth;


class OrdersController extends Controller
{
    public function index() {
    	$title = "Matre Logistics LTD | Checkout";
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        return view('home', compact(['title', 'cart']));
    }

    public function proceed(Request $request) {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->name = $request->name;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->zipCode = $request->zipCode;
        $order->country = $request->country;

        //$saveRecords = [];

        if ($order->save()) {

        	$totalCount = count($request->products);

        for ($i = 0; $i < $totalCount; $i++) {
        PurchaseOrder::create(['product_id' => $request->products[$i], 'amount' => $request->amount[$i], 'order_id' => $order->id]);
    }

        	Cart::where('user_id', Auth::user()->id)->delete();
            return redirect()->back()->with('success', 'Way to go');
        }
        else {
            return redirect()->back()->with('error', 'Sorry, unable to save data');
        }
    }

    public function orders() {
    	$title = "Matre Logistics LTD | Your Purchases";
        $orders = Order::where('user_id', Auth::user()->id)->paginate(10);
        return view('orders', compact(['title', 'cart', 'orders', 'purchases']));
    }

}
