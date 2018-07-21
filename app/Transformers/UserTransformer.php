<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @return array
     */
    public function transform($user)
    {

        return [
            'id'          => (int) $user->id,
            'name'        => $user->name,
            'email'       => $user->email,
            'user_type'   => $user->user_type,
        ];
    }

}