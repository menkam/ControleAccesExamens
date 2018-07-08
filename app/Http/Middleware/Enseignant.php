<?php

namespace App\Http\Middleware;

use Closure;

class Enseignant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if($user)
            if($user->role == 'enseignant' or $user->role == 'admin')
                return $next($request);
        
        return redirect()->route('home');
    }
}