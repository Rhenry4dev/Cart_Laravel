<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform($order)
    {

        return [
            'id'          => (int) $order->id,
            'user_id'        => $order->user->name,
            'cart_id'       => $order->cart_id,
            'payment_id'   => $order->payment->name,
            'order_status' => $order->order_status,
            'cart_token' => $order->cart_token,
            'address' => $order->address_id,
        ];
    }
}
