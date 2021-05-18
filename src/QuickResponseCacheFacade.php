<?php

namespace Marcoguidara\QuickResponseCache;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcoguidara\QuickResponseCache\QuickResponseCache
 */
class QuickResponseCacheFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'quick-laravel-responsecache';
    }
}
