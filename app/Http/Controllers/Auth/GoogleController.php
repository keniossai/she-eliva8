<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function handleGoogleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
           $user = Socialite::driver('google')->user();

           $userExisted = User::where('oauth_id', $user->id)->where('oauth_type', 'google')->first();
        } catch () {
            //throw $th;
        }
    }
}
