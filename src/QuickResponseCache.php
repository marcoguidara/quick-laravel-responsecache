<?php

namespace MarcoGuidara\QuickResponseCache;

use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;
use MarcoGuidara\QuickResponseCache\Abstracts\EventAbstract;
use Spatie\ResponseCache\Facades\ResponseCache;

class QuickResponseCache
{
    public static function isEnabled()
    {
        $config = config('quick-responsecache.enabled');
        if (!is_bool($config)) {
            return false;
        }

        return $config;
    }
}
