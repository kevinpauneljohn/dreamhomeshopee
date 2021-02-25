<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }

    public function index()
    {
        return view('dashboards.index',[
            'title' => 'Dashboard',
            'user'  => $this->user->getUser(auth()->user()->id)
        ]);
    }
}
