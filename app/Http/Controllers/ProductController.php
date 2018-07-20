<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        
        $this->middleware('autorizador');
    }

    public function list()
    {
        $products = Product::all();
        $data = ['products' => $products];

        return view('produto.list')->with($data);
    }

    public function show($id)
    {
        if (Auth::user()->user_type == 'admin') {
            $found = Product::find($id);

            if (empty($found)) {
                return "Esse produto não existe";
            }

                return view('produto.detalhes')
                ->with('p', $found);
        } else {
            return redirect()
            ->back();
        }
    }
    public function new()
    {
        return view('produto.form')->with('categorys', Category::all());
    }

    public function change($id)
    {
        $product = Product::find($id);
        return view('produto.update_form')
        ->with('categorys', Category::all())
        ->with('p', $product);
    }

    public function add(ProductRequest $request)
    {
        $data = $request->all();
        $name =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $new = $request->name.".".$ext;
        $request->file('image')->storeAs('', $new);
        $name =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $new = $request->name.".".$ext;
        $data['image'] = $new;
        Product::create($data);

         return redirect()
            ->route('index')
            ->withInput(Request::only('name'));
    }


    public function update(ProductRequest $request)
    {
        $product = Product::find($request->id);
        $data = $request->all();
        $name =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $new = $request->name.".".$ext;
        $request->file('image')->storeAs('', $new);
        $name =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $new = $request->name.".".$ext;
        $data['image'] = $new;
        $update = $product->update($data);

         return redirect()
            ->route('index')
            ->withInput(Request::only('name'));
    }

    public function remove($id)
    {
        $product = Product::find($id);
            
        $product->delete();
        return redirect()
            ->route('index');
    }
}
