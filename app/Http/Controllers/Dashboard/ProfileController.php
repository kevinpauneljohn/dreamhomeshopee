<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }

    public function profile()
    {
        return view('dashboards.myprofile',[
            'title' => 'My Profile',
            'user'  => $this->user->getUser(auth()->user()->id)
        ]);
    }
}
