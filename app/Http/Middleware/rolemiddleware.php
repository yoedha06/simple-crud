<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure $next
     * @param string ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!$request->user() || !$this->userHasAnyRole($request->user(), $roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }

    /**
     * Periksa apakah pengguna memiliki salah satu dari peran yang ditentukan.
     *
     * @param \App\Models\User $user
     * @param array $roles
     * @return bool
     */
    private function userHasAnyRole($user, array $roles): bool
    {
        return $user->hasAnyRole($roles);
    }
}
