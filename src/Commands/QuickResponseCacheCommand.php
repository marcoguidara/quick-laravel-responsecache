<?php

namespace Marcoguidara\QuickResponseCache\Commands;

use Illuminate\Console\Command;

class QuickResponseCacheCommand extends Command
{
    public $signature = 'quick-laravel-responsecache';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
