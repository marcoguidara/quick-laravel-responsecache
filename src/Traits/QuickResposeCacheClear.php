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

        $allowed_events = self::isSoftDeletable(static::class)
            ? array_merge(EventAbstract::ELOQUENT, EventAbstract::SOFT_DELETE)
            :  EventAbstract::ELOQUENT;

        foreach ($allowed_events as $event) {
            static::$event(fn () => ResponseCache::clear());
        }
    }

    private static function isSoftDeletable(string $class): bool
    {
        return in_array('Illuminate\Database\Eloquent\SoftDeletes', class_uses($class));
    }
}
