<?php

namespace App\Http\Controllers\API;

use App\Order;
use Storage;
use App\Transformers\OrderTransformer;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Hash;

class OrderController extends BaseController
{

    public function index()
    {

        $order = Order::all();

        return $this->response->collection($order, new OrderTransformer);
    }

    public function show($id)
    {

        $order = Order::find($id);

        return $this->response->item($order, new OrderTransformer);
    }
}
