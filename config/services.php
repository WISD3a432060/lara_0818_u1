<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    'google' => [
        'client_id' => env('42515104253-ktpj4uvib4cdgfl4fu79vus4pgrt93uj.apps.googleusercontent.com'),
        'client_secret' => env('9HP9WbYEpd0VLFPXEJ_sEw40'),
        'redirect' => env('http://localhost:8000/login/social/google/callback')
    ],
    'github' => [
        'client_id' => env('352c1a2570de4cafe04b'),
        'client_secret' => env('dabbfa6a1d584181f6f9a55d63b3cebe3a75347c'),
        'redirect' => env('http:localhost:8000/login/github/callback')
    ],


    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
