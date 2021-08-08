<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUser;
use App\Repositories\MeRepository;
use Illuminate\Support\Facades\Auth;

class MeController extends Controller
{
    public function __construct(MeRepository $repository)
    {
        $this->middleware('auth');
        $this->repository = $repository;
    }

    public function putUser(UpdateUser $request)
    {
        $payload = $request->validated();

        $this->repository->updateUser($payload);
        return redirect(route('profile'));
    }

    public function deleteUser() {
        Auth::user()->delete();
        Auth::logout();
        return redirect(route('landing'));
    }
}
