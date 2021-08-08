<?php

namespace App\Repositories;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MeRepository
{
    public function updateUser(array $payload): bool
    {
        if(!Auth::user()->signed_at && isset($payload['terms'])){
            $payload['signed_at'] = Carbon::now();
        }


        return Auth::user()->update($payload);
    }
}
