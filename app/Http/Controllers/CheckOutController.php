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
        $orders = Order::where('cart_id', $cart->id)->first();
        
        $found = Address::where('user_id', $id)->first();
        return view('checkout.info')
        ->with('address', $found)
        ->with('orders', $orders);
    }
    public function close($id)
    {

        $order = Order::where('id', $id)->first();
        Cart_Item::where('cart_id', $order->cart_id)->delete();
        Cart::where('id', $order->cart_id)
        ->where('token', Session::get('token'))
        ->update(['status' => 'closed']);
        Order::where('id', $id)
        ->update(['order_status' => 'closed']);


        return redirect()
        ->route('carrinho.buy');
    }
}
