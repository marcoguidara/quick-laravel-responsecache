<?php

return [
    /*
     * Determine if the response cache should be enabled.
     */
    'enabled' => env('QUICK_RESPONSE_CACHE_ENABLED', true),

    /*
     * Default number of seconds responses must be cached.
     */
    'cache_lifetime_in_seconds' => env('QUICK_RESPONSE_CACHE_LIFETIME', 60 * 60 * 24 * 7),
];
