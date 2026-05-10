<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /* protected $redirectTo = RouteServiceProvider::HOME; */
    /* protected function redirectTo()
    {
        $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return '/admin';
            case 'editor':
                return '/admin.news/news';
            case 'jornalista':
                return '/admin.news/news';
            case 'assinante':
                return '/';
            default:
                return '/login'; // fallback se algo estiver errado
        }
    } */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login', 302)->with('success', 'Logout feito com sucesso!');
    }

    protected function authenticated(Request $request, $user)
    {
         $role = Auth::user()->role;

        switch ($role) {
            case 'admin':
                return redirect()->intended('/admin/dashboard')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            case 'editor':
                return redirect()->intended('/admin.news/news')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            case 'jornalista':
                return redirect()->intended('/admin.news/news')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            case 'assinante':
                return redirect()->intended('/')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!');;
            default:
                return '/login'; // fallback se algo estiver errado
        }
       /*  return redirect()->intended('/admin/dashboard')->with('success', 'Login feito com sucesso. Bem-vindo, ' . $user->name . '!'); */
    }
}
