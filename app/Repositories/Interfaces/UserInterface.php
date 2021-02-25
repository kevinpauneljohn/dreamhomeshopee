<?php


namespace App\Repositories\Interfaces;


use App\Models\User;

interface UserInterface
{
    /**
     * create/register new user
     * @param User $user
     * @param array $data
     * @return mixed
     */
    public function create(User $user, array $data);
}
