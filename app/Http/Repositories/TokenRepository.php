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

        $test= Log::create([
            'key' => $token->key,
            'action' => 'created'
        ]);

        return $token;
    }

    public function revokeToken(string $token): bool
    {
        $token = Token::where('key', $token)->first();

        if ($token) {
            $tokenUpdate = $token->update([
                'revoked' => now()
            ]);
            $log = Log::where('key', $token->key)->first();

            if ($log) {
                $logUpdate = $log->update([
                    'action' => 'deleted'
                ]);
            } else {
                $logUpdate = false;
            }
            
        } else {
            $tokenUpdate = false;
            $logUpdate = false;
        }

  
        $result = ($tokenUpdate && $logUpdate) ? true : false;

        return $result;
    }
}