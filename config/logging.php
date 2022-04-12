<?php

<<<<<<< HEAD
use Monolog\Handler\NullHandler;
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
<<<<<<< HEAD
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),

    /*
    |--------------------------------------------------------------------------
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
<<<<<<< HEAD
            'channels' => ['single'],
=======
            'channels' => ['daily'],
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
=======
            'level' => 'debug',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
=======
            'level' => 'debug',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
            'days' => 14,
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'critical'),
=======
            'level' => 'critical',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        ],

        'papertrail' => [
            'driver' => 'monolog',
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
=======
            'level' => 'debug',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
            'handler' => SyslogUdpHandler::class,
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
            ],
        ],

        'stderr' => [
            'driver' => 'monolog',
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
=======
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
=======
            'level' => 'debug',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        ],

        'errorlog' => [
            'driver' => 'errorlog',
<<<<<<< HEAD
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
=======
            'level' => 'debug',
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
        ],
    ],

];
