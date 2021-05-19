<?php

namespace MarcoGuidara\QuickResponseCache;

class QuickResponseCache
{
    public static function isEnabled()
    {
        $config = config('quick-responsecache.enabled');
        if (! is_bool($config)) {
            return false;
        }

        return $config;
    }
}
