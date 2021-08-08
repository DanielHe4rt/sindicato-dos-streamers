<?php

return [
    'twitch' => [
        'client_id' => env('TWITCH_CLIENT_ID'),
        'client_secret'=> env('TWITCH_CLIENT_SECRET'),
        'client_redirect' => env('TWITCH_CLIENT_REDIRECT'),
        'scopes' => env('TWITCH_CLIENT_SCOPES')
    ]
];
