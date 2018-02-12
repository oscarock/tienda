<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;

class OrderController extends Controller
{
    public function index(Request $request){
    	
    	$order = new Order;
    	$order->order_number = $request->referenceCode;
    	$order->subtotal = $request->TX_VALUE;
    	$order->user_id = \Auth::user()->id;
    	$order->state_transaccion = $request->lapTransactionState;
    	$order->type_card = $request->lapPaymentMethod;
    	$order->type_pay = $request->lapPaymentMethodType;
    	$order->date_pay = $request->processingDate;
    	if($order->save()){
    		$cart = \Session::get('cart');
    		foreach ($cart as $item) {
    			$orderItem = new OrderItem;
    			$orderItem->price = $item->price;
    			$orderItem->quantity = $item->quantity;
    			$orderItem->order_id = $order->id;
    			$orderItem->product_id = $item->id;
    			$orderItem->save();
    		}
    	}



    	$message = "Compra realizada Correctamente.";

    	return redirect()->route('inicio')->with('message', $message); 	
	}
}
