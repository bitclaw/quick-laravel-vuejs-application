<?php

namespace App\Transformers;

use App\User;
use League\Fractal;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var  array
     */
    protected $availableIncludes = ['role'];

    /**
     * List of resources to automatically include
     *
     * @var  array
     */
    protected $defaultIncludes = [];

    /**
     * Transform object into a generic array
     *
     * @var  object
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'name'     => $user->name,
            'username' => $user->username,
            'email'    => $user->email
        ];
    }

    public function includeRole(User $user)
    {
        return $this->item($user->role, new RoleTransformer);
    }

}
