<?php

namespace MarcoGuidara\QuickResponseCache;

use Events;
use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;
use Spatie\ResponseCache\Facades\ResponseCache;

trait QuickResponseCache
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        if (config('quick-responsecache.enabled')) {
            foreach (Events::ALLOWED as $event) {
                static:: $event(fn() => ResponseCache::clear());
            }
        }
    }
}
