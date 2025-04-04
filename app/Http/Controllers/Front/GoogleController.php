<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    protected $model;
    public function __construct(User $model)
    {
        $this->model = $model;
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $user = User::where('email', $googleUser->email)->first();
            
            if (!$user) {
                $user = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => encrypt('123456dummy') // You can generate a random password here
                ]);
            } else {
                $user->update([
                    'google_id' => $googleUser->id,
                ]);
            }
            
            Auth::login($user);
            
            return redirect('/');
            
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google authentication failed: ' . $e->getMessage());
        }
    }
}
