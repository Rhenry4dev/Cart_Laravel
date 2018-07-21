<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Product;
use App\Http\Requests\Api\ProductAPIRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use Auth;
use App\Http\Resources\ProductCollection;
use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\ProductResource;
use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;
use App\Transformers\ProductTransformer;



class ProductController extends BaseController
{

    public function index()
    {

        $product = Product::all();

        return $this->response->collection($product, new ProductTransformer);
            
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return $this->response->item($product, new ProductTransformer);
            
    }

    public function store(ProductAPIRequest $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }


    public function update(ProductAPIRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

    public function destroy(ProductAPIRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return;
    }
}
