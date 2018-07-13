<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Cart;
use App\Cart_item;
use App\Http\Requests\CartRequest;
use App\Http\Requests\Cart_ItemRequest;
use Illuminate\Http\Response;
use Auth;

class QuantityCartController extends Controller
{

    public function atualizaCarrinho(Cart_ItemRequest $request)
    {

        $id = Auth::user()->id;
        $sol = Cart_Item::where('product_id', $request->input('product_id'))->first();
        $b = $sol->quantity;
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
        $sol = Cart_Item::where('product_id', $check)->first();
        $oldvalue = $sol->quantity;
        $qtd = $oldvalue - 1;

        Cart_Item::where('product_id', $check)
        ->update(['quantity' => $qtd]);

        return redirect()
        ->route('carrinho');
    }
}
