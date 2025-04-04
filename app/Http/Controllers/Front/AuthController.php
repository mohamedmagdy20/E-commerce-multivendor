<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function loginView()
    {
        return view('front.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $data = $request->validated();
        if(Auth::attempt($data))
        {
            return redirect('/')->with('success','Welcome Back');
        }else{
            return redirect()->back()->with('error','Incorrect Email and Password');
        }
    }
}
