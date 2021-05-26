<?php

namespace App\Observers;

use App\Models\Token;
use App\Models\Log;

class TokenObserver
{
    /**
     * Handle the Token "created" event.
     *
     * @param  \App\Models\Token  $token
     * @return void
     */
    public function created(Token $token)
    {
        Log::create([
            'key' => $token->key,
            'action' => 'created'
        ]);
    }

    /**
     * Handle the Token "deleted" event.
     *
     * @param  \App\Models\Token  $token
     * @return void
     */
    public function deleted(Token $token)
    {
        $log = Log::where('key', $token->key)->first();

        $log->update([
            'action' => 'deleted'
        ]);
    }

}
