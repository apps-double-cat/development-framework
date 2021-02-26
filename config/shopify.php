<?php
return [
    'app_name'              => env('APP_NAME'),
    'api_key'               => env('SHOPIFY_API_KEY'),
    'shared_secret'         => env('SHOPIFY_SHARED_SECRET'),
    'redirect_url'          => env('SHOPIFY_REDIRECT_URL'),
    'permissions'           => [env('SHOPIFY_PERMISSIONS')],
    'api_version'           => '2020-01',
    'app_url'               => env('APP_URL')
];
