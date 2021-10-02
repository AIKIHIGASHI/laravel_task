<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    protected $userTable;

    public function __construct(User $userInstance)
    {
        $this->userTable = $userInstance;
    }

    public function create()
    {
        return view('regist.register');
    }

    public function store(RegisterRequest $request)
    {
        $userInfo = $request->all();
        $userInfo['password'] = Hash::make($userInfo['password']);
        $this->userTable->fill($userInfo)->save();
        Session::put('currentUserName', $userInfo['name']);
        return redirect(route('home.index'));
    }
}
