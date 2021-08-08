<?php

namespace App\Http\Controllers;

use App\Repositories\AuthRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getRegister(Request $request, string $provider): RedirectResponse
    {
        $request->merge(['provider' => $provider]);
        $validated = $this->validate($request, [
            'provider' => 'required|in:twitch,discord',
            'code' => 'required'
        ]);
        try {
            $result = $this->repository->register($validated);
            Auth::login($result);

            return redirect(route('profile'));
        } catch (\Exception) {
            return redirect(route('landing'));
        }

    }

    public function getLogout()
    {
        Auth::logout();
        return redirect(route('landing'));
    }
}
