<?php

namespace App\Http\Middleware;

use App\User;
use Carbon\Carbon;
use Closure;

class LastOnlineUpdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (\Auth::check()) {
            /** @var User $user */
            $user = \Auth::user();
            $user->online_at = Carbon::now();
            $user->save();
        }

        return $next($request);
    }
}
