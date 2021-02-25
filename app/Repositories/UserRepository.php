<?php


namespace App\Repositories;


use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository implements UserInterface
{

    public function create(User $user, array $data)
    {
        return $user::create($data)->assignRole('basic');
    }
}
