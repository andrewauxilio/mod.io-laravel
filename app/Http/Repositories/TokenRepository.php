<?php

namespace App\Http\Repositories;

use App\Http\Controllers\ChallengeThree\Tokens\Interfaces\TokenRepositoryInterface;
use App\Models\Token;
use App\Models\User;
use App\Models\Log;
use Illuminate\Support\Str;

class TokenRepository implements TokenRepositoryInterface
{
    public function issueToken(User $user): Token
    {
        $token = Token::create([
            'user_id' => $user->id,
            'key' => Str::uuid(),
        ]);

        return $token;
    }

    public function revokeToken(string $token): bool
    {
        $token = Token::where('key', $token)->first();
  
        if ($token && $token->delete()) {
            return true;
        }

        return false;
    }
}