<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ChallengeThree\Tokens\Services\TokenService;

class ApiTokenMiddleware
{
    public $tokenService;

    public function __construct(TokenService $tokenService)
    {
        $this->tokenService = $tokenService;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$this->tokenService->checkToken($request->input('token'), Auth::user())) {
            return response('Bad request', 401);
        }

        return $next($request);
    }
}
