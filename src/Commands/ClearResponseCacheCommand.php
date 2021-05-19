<?php

namespace MarcoGuidara\QuickResponseCache\Commands;

use Illuminate\Console\Command;
use Spatie\ResponseCache\Facades\ResponseCache;

class ClearResponseCacheCommand extends Command
{
    public $signature = 'responsecache:clear';

    public $description = 'Clear response cache.';

    public function handle()
    {
        ResponseCache::clear();

        $this->comment('Response Cache cleared');
    }
}
