<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
<<<<<<< HEAD
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
=======
    | as Mailgun, SparkPost and others. This file provides a sane default
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
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

<<<<<<< HEAD
=======
    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
];
