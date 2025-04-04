<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\AuthRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $model;
    public function __construct(Admin $admin)
    {
        $this->model = $admin;
    }

    public function loginView()
    {
        return view('back.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $data = $request->validated();
        if(Auth('admin')->attempt($data))
        {
            return redirect()->route('admin.home')->with('succes','Welcome Back');
        }else{
            return redirect()->back()->with('error','Invaild Email or Password');
        }
    }

    public function logout()
    {
        Auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
