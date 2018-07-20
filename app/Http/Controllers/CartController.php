<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Cart;
use App\Cart_item;
use App\Http\Requests\CartRequest;
use App\Http\Requests\Cart_ItemRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Cookie;
use Session;
use Auth;

class CartController extends Controller
{


    public function CartAddProduct(CartRequest $request)
    {
        $id = Auth::user()->id;

        if ((Session::get('token') && Cart::where('token', Session::get('token'))->count() > 0) && Cart::where('status', 'open')) {
            $value = Session::get('token');
        } else {
            Session::put('token', md5(microtime()));
            $value = Session::get('token');

            $data = [
            'user_id' => $request->input('user_id'),
            'token' => $value,
            'status' => $request->input('status'),
            ];

            Cart::create($data);
        }


        $cart = Cart::where('token', $value)->first();
        $add = Product::find($request->input('product_id'));
        $idInt = $add->id;
        $sol = Cart_Item::where('product_id', $request->input('product_id'))->where('cart_id', $cart->id)->first();


        if (!$sol) { // Se o id do produto não existir na lista.
            $qtd = $request->input('quantity');
            $data = [
                'cart_id' => $cart->id,
                'product_id' => $idInt,
                'quantity' => $qtd,
            ];

            Cart_Item::create($data);

            return redirect()
            ->route('carrinho');
        } else {
            $quantity = $sol->quantity;
            $qtd = 1 + $quantity;
            Cart_Item::where('product_id', $request->input('product_id'))->where('cart_id', $cart->id)
            ->update(['quantity' => $qtd]);

            return redirect()
            ->route('carrinho');
        }
    }

    public function Product_cartList()
    {
        $value = Session::get('token');


        if (!$value) {
            Session::put('token', md5(microtime()));
            $value = Session::get('token');
        }

        $carts = Cart::where('token', $value)->first();

        return view('carrinho.CartList')
        ->with('carts', $carts);
    }

    public function ProductDelete($id)
    {

        $product = Cart_Item::where('product_id', $id);
        $product->delete();

        return redirect()
        ->route('carrinho');
    }

    public function atualizaCarrinho(Cart_ItemRequest $request)
    {

        $id = Auth::user()->id;
        $sol = Cart_Item::where('product_id', $request->input('product_id'))->get();
        $b = $sol[0]->quantity;
        $qtd = 1 + $b;
        Cart_Item::where('product_id', $request->input('product_id'))
        ->update(['quantity' => $qtd]);

        return redirect()
        ->route('carrinho');
    }

    public function atualizaCarrinhob(Cart_ItemRequest $request)
    {

        $id = Auth::user()->id;

        if ($request->input('quantity') <= 1) {
            $product = Cart_Item::find($request->input('cart_id'));
            $id_product = $product->product_id;
            $qtd = 1;
            Cart_Item::where('product_id', $id_product)
            ->update(['quantity' => $qtd]);
            return redirect()
            ->route('carrinho');
        }
        $check = $request->input('product_id');
        $sol = Cart_Item::where('product_id', $check)->get();
        $oldvalue = $sol[0]->quantity;
        $qtd = $oldvalue - 1;

        Cart_Item::where('product_id', $check)
        ->update(['quantity' => $qtd]);

        return redirect()
        ->route('carrinho');
    }

    public function listToBuy()
    {
        $produtos = Product::all();
        $data = ['produtos' => $produtos];
        return view('produto.buy')->with($data);
    }
}
