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
    // 'github' => [
    //     'client_id' => '8d56f3806bcad45fc301', //Github API
    //     'client_secret' => 'a074b62bcef338439ccec78540ffd76bb405416f', //Github Secret
    //     'redirect' => 'http://localhost:8000/login/github/callback',
    //  ],
    //  'google' => [
    //     'client_id' => '792082097032-pb2bjroi1mbs5iu7p0hkk4835cur69i1.apps.googleusercontent.com', //Google API
    //     'client_secret' => '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', //Google Secret
    //     'redirect' => 'http://localhost:8000/login/google/callback',
    //  ],
    //  'facebook' => [
    //     'client_id' => '6865812653504450', //Facebook API
    //     'client_secret' => '3a5fe04a46a0cf82efc741c546ddda20', //Facebook Secret
    //     'redirect' => 'http://localhost:8000/login/facebook/callback',
    //  ],


];
