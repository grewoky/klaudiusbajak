<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:3000','http://localhost:8000'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['X-XSRF-TOKEN', 'Content-Type', 'Accept', 'Authorization'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true,

];