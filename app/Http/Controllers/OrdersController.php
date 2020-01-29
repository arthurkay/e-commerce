<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\PurchaseOrder;
use App\Order;
use Auth;
use Carbon\Carbon;


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

        	//Cart::where('user_id', Auth::user()->id)->delete();
            //return redirect()->back()->with('success', 'Way to go');
            //$request->setMethod('POST');
            //$this->OnePay($request);

        $prices = [];
        foreach($request->amount as $price ) {
            array_push($prices, $price);
            
        }

        $test = 0;
        $channel_id = env('CHANNEL_ID');
        $currency = 'ZMW';
        $amount = array_sum($prices) * 100;
        $transaction_reference = str_random(12).'-'.Carbon::now();
        $secret = env('SECRET');
        $signature = $channel_id.$currency.$amount.$transaction_reference.$secret;
        $url = 'https://checkout.onepay.co.zm/v1';

         return redirect()->back()->with('url', $url)
         ->with('test', $test)
         ->with('currency', $currency)
         ->with('amount', $amount)
         ->with('transaction_reference', $transaction_reference)
         ->with('signature', hash('sha256', $signature))
         ->with('channel_id', $channel_id)
         ->with('url', $url);
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

    public function OnePay($request) {
    
        $prices = [];
        foreach($request->amount as $price ) {
            array_push($prices, $price);
            
        }

        $test = 'TEST';
        $channel_id = env('CHANNEL_ID');array_sum
        $currency = 'ZMW';
        $amount = array_sum($prices) * 100;
        $transaction_reference = str_random(12).'-'.Carbon::now();
        $secret = env('SECRET');
        $signature = $test.$channel_id.$currency.$amount.$transaction_reference.$secret;
        $url = 'https://checkout.onepay.co.zm/v1';


        return view('verify', compact(['test', 'channel_id', 'currency', 'amount', 'transaction_reference', 'signature']));
        /*
        $ch = curl_init($url);
        $payload = array(
            'test' => 1,
            'currency' => $currency,
            'amount' => $amount,
            'transaction_reference' => $transaction_reference,
            'signature' => hash('sha256', $signature)
        );

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        //    'Content-Type: text/html'));
        $result = curl_exec($ch);
        dd($result);
        */
    }

}
