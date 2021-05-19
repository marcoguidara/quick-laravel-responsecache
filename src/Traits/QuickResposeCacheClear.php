<?php

namespace MarcoGuidara\QuickResponseCache\Traits;

use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;
use MarcoGuidara\QuickResponseCache\Abstracts\EventAbstract;
use Spatie\ResponseCache\Facades\ResponseCache;

trait QuickResposeCacheClear
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        foreach (EventAbstract::ALLOWED as $event) {
            static:: $event(fn () => ResponseCache::clear());
        }
    }
}
