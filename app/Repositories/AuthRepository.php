<?php

namespace App\Repositories;

use App\Models\User;
use App\Services\TwitchService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class AuthRepository
{
    public function register(array $payload): User
    {
        $authService = $this->getService($payload['provider']);
        $authData = $authService->auth($payload['code']);
        $response = $authService->getAuthenticatedUser($authData['access_token']);
        $response['access_token'] = $authData['access_token'];

        return $this->findOrCreate($payload, $response, $authService);
    }

    public function findOrCreate($payload, $providerData, $authService): User
    {
        $auth = User::where('email', $providerData['email'])->first();
        if (!$auth) {
            $fields = [
                $payload['provider'] . "_id" => $providerData['id'],
                $payload['provider'] . '_username' => $providerData['name'],
                'image' => $providerData['image'],
                'email' => $providerData['email'],
                'views' => $providerData['views'],
                $payload['provider'] . '_created_at' => Carbon::parse($providerData['created_at'])
            ];
            if ($payload['provider'] == 'twitch') {
                $fields['views'] = $authService->getFollowers($providerData['access_token'], $providerData['id']);
            }
            return User::create($fields);

        }

        if (empty($auth->{$payload['provider'] . "_id"})) {
            $auth->update([
                $payload['provider'] . "_id" => $providerData['id'],
                $payload['provider'] . '_username' => $providerData['name'],
            ]);

            return $auth;
        }

        if ($auth->email == $providerData['email']) {
            return $auth;
        }

        throw new \Exception('deu ruim');
    }

    public function getLogout(): RedirectResponse
    {
        return redirect(route('landing'));
    }

    protected function getService($provider)
    {
        return match ($provider) {
//            'discord' => new DiscordService(),
            'twitch' => new TwitchService()
        };
    }
}
