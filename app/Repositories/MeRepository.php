<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MeRepository
{
    public function updateUser(array $payload): bool
    {
        if(!Auth::user()->signed_at && isset($payload['terms'])){
            $payload['signed_at'] = Carbon::now();
            if ($payload['role'] == 'streamer' && Auth::user()->views >= 30000)
            Log::channel('discord')->info(sprintf(
                '[%s] % assinou o manifesto com uma comunidade de %s viewers',
                date('Y-m-d H:i:s'),
                Auth::user()->twitch_username,
                Auth::user()->views
            ));
        }

        if(!isset($payload['terms']) || !$payload['terms']){
            $payload['signed_at'] = null;
        }

        return Auth::user()->update($payload);
    }
}
