<?php

namespace MarcoGuidara\QuickResponseCache;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcoGuidara\QuickResponseCache\QuickResponseCache
 */
class QuickResponseCacheFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'quick-laravel-responsecache';
    }
}
