<?php

declare(strict_types=1);

namespace App\Http\Controllers\ChallengeOne\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

final class CreateController extends Controller
{

    /**
     * create a user
     *
     * @param Request $request
     * @return UserResource
     */
    public function create(Request $request): UserResource
    {
        // TODO: challenge 1.0
    }


}
