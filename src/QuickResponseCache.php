<?php

namespace MarcoGuidara\QuickResponseCache;

use Spatie\ResponseCache\Facades\ResponseCache;

class QuickResponseCache
{
    public static function isEnabled(): bool
    {
        $config = config('quick-responsecache.enabled');
        if (! is_bool($config)) {
            return false;
        }

        return $config;
    }

    public static function clear(): void
    {
        ResponseCache::clear();
    }
}
