<?php

namespace App\Http\Middleware;

use Closure;
use App\Enum\UserRole;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        // Ambil path saat ini
        $currentPath = trim($request->path(), '/');

        // Jika path diawali dengan "dashboard"
        if (str_starts_with($currentPath, 'dashboard')) {
            // Dan role user bukan admin
            if ($user->role !== UserRole::Admin) {
            // flash('Anda tidak punya akses !!' , 'error');
                return redirect('/');
            }
        }
        return $next($request);
    }
}
