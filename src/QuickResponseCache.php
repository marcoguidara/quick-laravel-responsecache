<?php

namespace MarcoGuidara\QuickResponseCache;

use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;
use MarcoGuidara\QuickResponseCache\Abstracts\EventAbstract;
use Spatie\ResponseCache\Facades\ResponseCache;

trait QuickResponseCache
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        if (config('quick-responsecache.enabled')) {
            foreach (EventAbstract::ALLOWED as $event) {
                static:: $event(fn () => ResponseCache::clear());
            }
        }
    }
}
