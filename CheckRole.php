<?php
namespace Dev\Rabc\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use function abort; // Added this line to import the abort function

class CheckRole
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || !Auth::user()->hasRole($role)) {
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}