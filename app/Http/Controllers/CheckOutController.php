<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Order;
use App\Address;
use App\User;
use App\Cart_Item;
use App\Cart;
use Session;
use App\Events\OrderCreated;

class CheckOutController extends Controller
{

    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function cadastro()
    {
        return view('checkout.register')
        ->with('payments', Payment::all());
    }

    public function informacoes($id)
    {
        $cart = Cart::where('token', Session::get('token'))->first();
        $orders = Order::where('cart_id', $cart->id)->where('cart_token', Session::get('token'))->first();
        
        $found = Address::where('user_id', $id)->where('cart_token', Session::get('token'))->first();
        return view('checkout.info')
        ->with('address', $found)
        ->with('orders', $orders);
    }
    public function close($id)
    {
        $cart = Cart::where('token', Session::get('token'))->first();
        $order = Order::where('id', $id)->where('cart_id', $cart->id)->first();

        event(new OrderCreated($order));

        Cart_Item::where('cart_id', $order->cart_id)->update(['quantity' => 1]);
        Cart_Item::where('cart_id', $order->cart_id)->delete();
        Cart::where('id', $order->cart_id)
        ->where('token', Session::get('token'))->delete();
        Order::where('id', $id)
        ->update(['order_status' => 'closed']);

        

        return redirect()
        ->route('carrinho.buy');
    }
}
