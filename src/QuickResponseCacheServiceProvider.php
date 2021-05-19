<?php

namespace MarcoGuidara\QuickResponseCache;

use MarcoGuidara\QuickResponseCache\Commands\QuickResponseCacheCommand;
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
            ->hasConfigFile('quick-responsecache');
    }
}
