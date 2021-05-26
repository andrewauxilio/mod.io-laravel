<?php

declare(strict_types=1);

namespace App\Http\Controllers\ChallengeThree\Tokens;

use App\Http\Repositories\TokenRepository;
use App\Http\Resources\TokenResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

final class CreateController extends Controller
{

    private $tokenRepository;

    public function __construct(TokenRepository $tokenRepository)
    {
        $this->tokenRepository = $tokenRepository;
    }

    /**
     * create a mod and related it to the given user
     *
     * @return TokenResource
     */
    public function create(): TokenResource
    {
        $token = $this->tokenRepository->issueToken(Auth::user());
        return new TokenResource($token);
    }


}
