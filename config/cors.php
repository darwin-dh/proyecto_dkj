<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

  'paths' => ['api/*', 'sanctum/csrf-cookie'],
    'paths' => ['*'],

    'allowed_methods' => ['GET, POST, PUT, PATCH, DELETE, OPTIONS'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => ['/(.*)\.wip/','/(.*)\.test/'],

    'allowed_headers' => ['content-type','accept','x-custom-header'],

    'exposed_headers' => ['x-costom-response-header'],

    'max_age' => 60,

    'supports_credentials' => false,
  


   /* 'paths' => ['api/*'],
    'allowed_methods' => ['*'],
    // 'allowed_origins' => ['http://127.0.0.1:8080/', 'http://localhost:8080/'], <-- doesn't work, still gets CORS error
    'allowed_origins' => ['*'],  // <-- it works but it should not be like that
    'allowed_origins_patterns' => [],
    //'allowed_headers' => ['content-type', 'accept', 'x-custom-header', 'Access-Control-Allow-Origin'],
     'allowed_headers' => ['*'],
    'exposed_headers' => ['x-custom-response-header'],
    'max_age' => 0,
    'supports_credentials' => false,*/
];


