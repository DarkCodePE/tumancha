<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '746858658408-02df3c6iuqa81hvb3deketkfodnh4ud3.apps.googleusercontent.com', // your client_id form google console
        'client_secret' => 'c5Y8zVbK4bbWDwBnz3MQCnCP', // your client_secret form google console
        'redirect' => 'http://localhost:8000',
        'scope'         => ['userinfo_email', 'userinfo_profile', 'https://www.google.com/m8/feeds/'],
    ],

];
