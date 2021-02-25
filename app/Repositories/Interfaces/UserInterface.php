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

    /**
     * get a specified user
     * @param $user_id
     * @return mixed
     */
    public function getUser($user_id);
}
