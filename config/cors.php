<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | The allowed_methods and allowed_headers options are case-insensitive.
    |
    | You don't need to provide both allowed_origins and allowed_origins_patterns.
    | If one of the strings passed matches, it is considered a valid origin.
    |
    | If array('*') is provided to allowed_methods, allowed_origins or allowed_headers
    | all methods / origins / headers are allowed.
    |
    */

    'allow_credentials' => false,
    /*
     * You can enable CORS for 1 or multiple paths.
     * Example: ['api/*']
     */
    'paths' => ['api/*'],

    /*
    * Matches the request method. `[*]` allows all methods.
    */
    'allowed_methods' => [
        'POST',
        'GET',
        'OPTIONS',
        'PUT',
        'PATCH',
        'DELETE',
    ],

    /*
     * Matches the request origin. `[*]` allows all origins.
     */
    'allowed_origins' => ['*'],

    /*
     * Matches the request origin with, similar to `Request::is()`
     */
    'allowed_origins_patterns' => [],

    /*
     * Sets the Access-Control-Allow-Headers response header. `[*]` allows all headers.
     */
    'allowed_headers' => [
        'Content-Type',
        'X-Auth-Token',
        'Origin',
        'Authorization',
    ],

    /*
     * Sets the Access-Control-Expose-Headers response header.
     */
    'exposed_headers' => [
        'Cache-Control',
        'Content-Language',
        'Content-Type',
        'Expires',
        'Last-Modified',
        'Pragma',
    ],

    'forbidden_response' => [
        'message' => 'Forbidden (cors).',
        'status' => 403,
    ],

    /*
     * Sets the Access-Control-Max-Age response header.
     */
    'max_age' => 60 * 60 * 24,

    /*
     * Sets the Access-Control-Allow-Credentials header.
     */
    'supports_credentials' => false,
];
