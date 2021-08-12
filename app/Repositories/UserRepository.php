<?php

namespace App\Repositories;

use App\Exceptions\StreamerNotFoundException;
use App\Models\User;

class UserRepository
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function getUserByUsername(string $twitchUsername)
    {
        $model = $this->model->where(
            'twitch_username', '=', $twitchUsername
        )->first();

        if (!$model) {
            throw new StreamerNotFoundException();
        }
        return $model->only([
            'twitch_username',
            'views',
            'image'
        ]);
    }
}
