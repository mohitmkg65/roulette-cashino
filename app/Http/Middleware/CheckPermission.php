<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    public function handle(Request $request, Closure $next, $requiredPermission = null): Response
    {
        $user = auth()->guard('admin')->user();

        if ($user->role === 'admin' && $user->isSystemUser) {
            if ($requiredPermission) {
                $permissions = $user->permissions ?? [];
                $allPermissions = collect($permissions)->flatten()->toArray();
                if (!in_array($requiredPermission, $allPermissions)) {
                    return response()->json(['message' => 'Forbidden: Missing permission'], 403);
                }
            }
        }

        return $next($request);
    }
}
