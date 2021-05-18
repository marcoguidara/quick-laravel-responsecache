<?php

namespace MarcoGuidara\QuickResponseCache\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use MarcoGuidara\QuickResponseCache\QuickResponseCacheServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'MarcoGuidara\\QuickResponseCache\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            QuickResponseCacheServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_quick-laravel-responsecache_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
