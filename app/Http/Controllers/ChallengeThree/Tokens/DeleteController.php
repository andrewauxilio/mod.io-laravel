<?php

declare(strict_types=1);

namespace App\Http\Controllers\ChallengeThree\Tokens;

use App\Http\Repositories\TokenRepository;
use App\Http\Controllers\Controller;
use App\Http\Requests\TokenDeleteRequest;
use Illuminate\Http\Response;

final class DeleteController extends Controller
{

    private $tokenRepository;

    public function __construct(TokenRepository $tokenRepository)
    {
        $this->tokenRepository = $tokenRepository;
    }

    /**
     * delete a given token, return a resp
     *
     * @param TokenDeleteRequest $request
     * @return Response
     */
    public function delete(TokenDeleteRequest $request): Response
    {
       $result =  $this->tokenRepository->revokeToken($request->input('token'));
       return ($result) ? response('Success', 204) : response('Bad Request', 401);
    }


}
