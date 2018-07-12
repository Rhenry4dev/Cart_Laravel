<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function list()
    {
        $produtos = Product::all();

        return view('produto.list')
        ->with('produtos', $produtos);
    }

/*   public function listToBuy()

        {
        $produtos = Product::all();

        return view('produto.buy')
        ->with('produtos', $produtos);
        }*/

    public function show($id)
    {
        $resposta = Product::find($id);

        if (empty($resposta)) {
            return "Esse produto não existe";
        }

            return view('produto.detalhes')
            ->with('p', $resposta);
    }
    public function new()
    {
        return view('produto.form')->with('categorys', Category::all());
    }

    public function change($id)
    {
        $produto = Product::find($id);
        return view('produto.update_form')
        ->with('categorys', Category::all())
        ->with('p', $produto);
    }

    public function add(ProductRequest $request)
    {
        $data = $request->all();
        $nome =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($nome, PATHINFO_EXTENSION);
        $novo = $request->name.".".$ext;
        #Storage::disk('local')->put(file_get_contents($folder.'/'.$data['image']));
        $request->file('image')->storeAs('', $novo);
        $nome =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($nome, PATHINFO_EXTENSION);
        $novo = $request->name.".".$ext;
        $data['image'] = $novo;
        Product::create($data);

         return redirect()
            ->action('ProductController@list')
            ->withInput(Request::only('name'));
    }


    public function update(ProductRequest $request)
    {
        $produto = Product::find($request->id);
        $data = $request->all();
        $nome =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($nome, PATHINFO_EXTENSION);
        $novo = $request->name.".".$ext;
        #Storage::disk('local')->put(file_get_contents($folder.'/'.$data['image']));
        $request->file('image')->storeAs('', $novo);
        $nome =  $request->file('image')->getClientOriginalName();
        $ext = pathinfo($nome, PATHINFO_EXTENSION);
        $novo = $request->name.".".$ext;
        $data['image'] = $novo;
        $update = $produto->update($data);

         return redirect()
            ->action('ProductController@list')
            ->withInput(Request::only('name'));
    }

    public function remove($id)
    {
        $produto = Product::find($id);
            
        $produto->delete();
        return redirect()
            ->action('ProductController@list');
    }

    public function listaJson()
    {
        $produtos=Product::all();
        return response()
        ->json($produtos);
    }

    public function getPublicPath()
    {
        return public_path();
    }
}
