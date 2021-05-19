<?php

namespace MarcoGuidara\QuickResponseCache\Middlewares;

use Closure;
use Illuminate\Http\Request;
use MarcoGuidara\QuickResponseCache\QuickResponseCache;
use Spatie\ResponseCache\Middlewares\CacheResponse;

class QuickCacheResponse
{
    protected CacheResponse $cache_response;

    public function __construct(CacheResponse $cache_response)
    {
        $this->cache_response = $cache_response;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (! QuickResponseCache::isEnabled()) {
            return $next($request);
        }

        return $this->cache_response->handle($request, $next);
    }
}
