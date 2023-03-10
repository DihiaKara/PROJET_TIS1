<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->isStudent()) {
            return $next($request);
        } else {
            abort(403, 'Vous n\'etes pas un étudiant');
        }
    }
}

