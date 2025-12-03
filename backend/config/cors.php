<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Configure here the settings for cross-origin resource sharing (CORS).
    | This determines what cross-origin operations may execute in web browsers.
    | You can add paths, allowed origins, headers, etc.
    |
    | Documentation: https://laravel.com/docs/10.x/cors
    |
    */

    'paths' => [
        'api/*',           // toutes les routes API
        'register',        // route spécifique
        'login',           // route spécifique
        'me',              // route utilisateur connecté
        'sanctum/csrf-cookie', // nécessaire pour Sanctum
    ],

    'allowed_methods' => ['*'], // accepte GET, POST, PUT, DELETE, etc.

    'allowed_origins' => [
        'http://localhost:3000', // frontend React sur port 3000
        'http://localhost:5173', // frontend Vite sur port 5173
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // accepte tous les headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => true, // important si tu utilises Sanctum

];
