<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        // Check if the user is logged in
        if (Auth::check()) {
            $user = Auth::user();

            // Check if the logged-in user is the admin
            if ($user->email === 'admin@admin.com') {
                return $next($request); // Allow access
            }
        }

        // If the user is not admin, redirect to home or any other page
        return redirect('/home')->with('error', 'You do not have access to this page.');
    }
}
