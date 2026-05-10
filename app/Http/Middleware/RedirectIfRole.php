<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfRole
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

    if ($user) {
        switch ($user->role) {
            case 'admin':
                return redirect('/admin/dashboard');
            case 'editor':
                return redirect('/editor/painel');
            // etc...
        }
    }

    return $next($request);
    }
}
