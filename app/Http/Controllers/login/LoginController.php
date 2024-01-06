<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Domain\Login\DTO\LoginDTO;
use App\Http\Resources\LoginResource;
use Domain\Login\Actions\GenerateAccessToken;

/**
 * This class is responsible for handling login related functionality.
 * @extends Controller
 */
class LoginController extends Controller
{
    public function Login(LoginRequest $loginRequest, GenerateAccessToken $generateAccessToken):LoginResource
    {
        return new LoginResource($generateAccessToken(LoginDTO::fromRequest($loginRequest)));
    }
}
