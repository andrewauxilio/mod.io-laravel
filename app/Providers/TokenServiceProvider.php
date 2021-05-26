<?php

namespace App\Providers;

use App\Http\Controllers\ChallengeThree\Tokens\Interfaces\TokenRepositoryInterface;
use App\Http\Controllers\ChallengeThree\Tokens\Interfaces\TokenServiceInterface;
use App\Http\Controllers\ChallengeThree\Tokens\Repositories\TokenRepository;
use App\Http\Controllers\ChallengeThree\Tokens\Services\TokenService;
use Illuminate\Support\ServiceProvider;
use App\Observers\TokenObserver;
use App\Models\Token;

class TokenServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Http\Controllers\ChallengeThree\Tokens\Services\TokenService', function ($app) {
            return new TokenService();
          });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Token::observe(TokenObserver::class);
    }
}
