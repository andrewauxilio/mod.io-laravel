<?php

namespace App\Http\Controllers\ChallengeThree\Tokens\Services;

use App\Http\Controllers\ChallengeThree\Tokens\Interfaces\TokenServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TokenService implements TokenServiceInterface
{
    public function checkToken(string $token, User $user): bool
    {
        $currentToken = Auth::user()->tokens->last();

        if ($currentToken && $token == $currentToken->key) {
            return true;
        }

        return false;
    }
}