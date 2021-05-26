<?php

declare(strict_types=1);

namespace App\Http\Controllers\ChallengeTwo\Mods;

use App\Http\Controllers\Controller;
use App\Http\Resources\ModResource;
use App\Models\Mod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class CreateController extends Controller
{

    /**
     * create a mod and related it to the given user
     *
     * @param Request $request
     * @return ModResource
     */
    public function create(Request $request): ModResource
    {
        $request->validate([
            'name' => 'required|string',
            'path' => 'required|string',
        ]);

        $mod = Mod::create([
            'name' => $request->input('name'),
            'path' => $request->input('path'),
            'user_id' => Auth::id(),
        ]);

        return new ModResource($mod);
    }


}
