<?php

namespace App\Http\Controllers;

use App\Exceptions\StreamerNotFoundException;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class UsersController extends Controller
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getUser(Request $request, string $twitchUsername)
    {
        try {
            $response = $this->repository->getUserByUsername($twitchUsername);
            return response()->json($response);
        } catch (StreamerNotFoundException) {
            return response()->json([], 422);
        }
    }
}
