<?php

namespace App\Contracts;

interface OAuthAuthenticableContract
{
    public function auth(string $code): array;

    public function getAuthenticatedUser(string $token): array;
}
