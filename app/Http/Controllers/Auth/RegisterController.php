<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    private $user;

    public function __construct(UserRepository $userRepository)
    {
        $this->user = $userRepository;
    }

    public function index()
    {
        return view('pages.register');
    }

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname'  => 'required',
            'email' => 'required|email|unique:users,email',
            'password'  => 'required|confirmed'
        ]);

        if($validation->passes())
        {
            $this->user->create(new User(), $request->all());
            return redirect()->back()->with('success', true);
        }
        return redirect()->back()->withErrors($validation->errors())->withInput();
    }
}
