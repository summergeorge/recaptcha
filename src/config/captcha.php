<?php

return [
    'secret' => env('NOCAPTCHA_SECRET'),
    'sitekey' => env('NOCAPTCHA_SITEKEY'),
    'client_api' => env('CLIENT_API', 'https://www.google.com/recaptcha/api.js'),
    'verify_url' => env('VERIFY_URL', 'https://www.google.com/recaptcha/api/siteverify'),
    'options' => [
        'timeout' => 30,
    ],
];
