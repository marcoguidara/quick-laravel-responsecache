<?php

namespace MarcoGuidara\QuickResponseCache\Traits;

use GeneaLabs\LaravelPivotEvents\Traits\PivotEventTrait;
use MarcoGuidara\QuickResponseCache\Abstracts\EventAbstract;
use Spatie\ResponseCache\Facades\ResponseCache;

/**
 * Clear response cache on model change (created,updateddeleted). Clear response cache on model pivot table change (pivot table attached, detached and updated)
 */
trait QuickResposeCacheClear
{
    use PivotEventTrait;

    public static function boot()
    {
        parent::boot();

        foreach (EventAbstract::ALLOWED as $event) {
            static::$event(fn () => ResponseCache::clear());
        }
    }
}
