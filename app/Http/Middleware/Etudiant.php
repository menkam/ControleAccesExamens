<?php

namespace App\Http\Middleware;

use Closure;

class Etudiant
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

        if($user && $user->role == 'etudiant'){
            return $next($request);
        }
        
        return redirect()->route('home');
    }
}