<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SocialAuthController extends Controller
{
    //
    /*  public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = User::updateOrCreate(
                ['email' => $socialUser->getEmail()],
                [
                    'name'     => $socialUser->getName(),
                    'password' => bcrypt(str()->random(16)), // senha aleatória
                ]
            );

            Auth::login($user);

            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Falha ao autenticar com ' . ucfirst($provider));
        }
    } */

    // Redireciona pro Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

        /* Fazendo o teste para verificar o URL */
        /* $url = Socialite::driver('google')->redirect()->getTargetUrl();
        dd($url); */
        /* return redirect($url); */
    }

    // Callback do Google
    public function handleGoogleCallback()
    {
        try {
            $social = Socialite::driver('google')->user();

            $user = User::where('provider', 'google')
                ->where('provider_id', $social->getId())
                ->orWhere('email', $social->getEmail())
                ->first();

            if (! $user) {
                $user = User::create([
                    'name' => $social->getName() ?? $social->getNickname(),
                    'email' => $social->getEmail(),
                    'provider' => 'google',
                    'provider_id' => $social->getId(),
                    'image' => $social->getAvatar(),
                    'email_verified_at' => now(),
                    'password' => bcrypt(uniqid()),
                ]);
            } else {
                $user->update([
                    'provider' => 'google',
                    'provider_id' => $social->getId(),
                    'image' => $social->getAvatar(),
                ]);
            }

            Auth::login($user, true);
            dd(Auth::user());
            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            Log::error('Google login error: '.$e->getMessage());
            return redirect()->route('login')->withErrors(['msg' => 'Falha ao autenticar com Google.']);
        }
    }
}
