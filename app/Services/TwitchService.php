<?php

namespace App\Services;

use App\Contracts\OAuthAuthenticableContract;
use GuzzleHttp\Client;

class TwitchService implements OAuthAuthenticableContract
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.twitch.tv/helix/',
            'timeout' => 5.0
        ]);
    }

    public function generateLink(): string
    {
        return sprintf(
            "https://id.twitch.tv/oauth2/authorize?client_id=%s&redirect_uri=%s&scope=%s&response_type=code",
            config('oauth.twitch.client_id'),
            config('oauth.twitch.client_redirect'),
            config('oauth.twitch.scopes')
        );
    }

    public function auth(string $code): array
    {
        $uri = "https://id.twitch.tv/oauth2/token";

        $response = $this->client->request('POST', $uri, [
            'form_params' => [
                'client_id' => config('oauth.twitch.client_id'),
                'client_secret' => config('oauth.twitch.client_secret'),
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => config('oauth.twitch.client_redirect')
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function getAuthenticatedUser(string $token): array
    {
        $uri = "users";
        $response = $this->client->request('GET', $uri, [
            'headers' => [
                'Client-ID' => config('oauth.twitch.client_id'),
                'Authorization' => 'Bearer ' . $token
            ]
        ]);

        $result = json_decode($response->getBody(), true)['data'][0];
        return [
            'id' => $result['id'],
            'name' => $result['login'],
            'image' => $result['profile_image_url'],
            'email' => $result['email'],
            'views' => $result['view_count'],
            'created_at' => $result['created_at']
        ];
    }

    public function getFollowers(string $token, $userId): int
    {
        $uri = "users/follows?to_id=$userId";
        $response = $this->client->request('GET', $uri, [
            'headers' => [
                'Client-ID' => config('oauth.twitch.client_id'),
                'Authorization' => 'Bearer ' . $token
            ]
        ]);

        return json_decode($response->getBody(), true)['total'];
    }
}
