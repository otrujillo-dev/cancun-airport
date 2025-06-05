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

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],
    'no_follow' => env('NO_FOLLOW', '0'),
    'phones' => [
        'MX' => env('PHONE_MX', ''),
        'US' => env('PHONE_US', ''),
        'WHATSAPP' => env('PHONE_WHATSAPP', ''),
    ],
    'email' => [
        'main' => env('EMAIL', ''),
    ],
    'social' => [
        'facebook' => env('SOCIAL_FACEBOOK', ''),
        'instagram' => env('SOCIAL_INSTAGRAM', ''),
        'tripadvisor' => env('SOCIAL_TRIPADVISOR', ''),
        'yelp' => env('SOCIAL_YELP', ''),
    ],
    'payment' => [
        'stripe' => [
            'public' => env('PAYMENT_STRIPE_PUBLIC')
        ],
        'paypal' => [
            'merchant' => env('PAYMENT_PAYPAL_MERCHANT', ''),
            'public' => env('PAYMENT_PAYPAL_PUBLIC', '')
        ]
    ]
];
