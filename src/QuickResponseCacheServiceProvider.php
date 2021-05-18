<?php

namespace Marcoguidara\QuickResponseCache;

use Marcoguidara\QuickResponseCache\Commands\QuickResponseCacheCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class QuickResponseCacheServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('quick-laravel-responsecache')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_quick-laravel-responsecache_table')
            ->hasCommand(QuickResponseCacheCommand::class);
    }
}
