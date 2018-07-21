<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform($product)
    {

        return [
            'id'          => (int) $product->id,
            'name'        => $product->name,
            'price'       => $product->price,
            'description' => $product->description,
            'quantity'    => $product->quantity,
            'image'       => $product->image,
        ];
    }
}
