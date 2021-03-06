# Response cache functionality with minimal configuration.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/marcoguidara/quick-laravel-responsecache.svg?style=flat-square)](https://packagist.org/packages/marcoguidara/quick-laravel-responsecache)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/marcoguidara/quick-laravel-responsecache/run-tests?label=tests)](https://github.com/marcoguidara/quick-laravel-responsecache/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/marcoguidara/quick-laravel-responsecache/Check%20&%20fix%20styling?label=code%20style)](https://github.com/marcoguidara/quick-laravel-responsecache/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/marcoguidara/quick-laravel-responsecache.svg?style=flat-square)](https://packagist.org/packages/marcoguidara/quick-laravel-responsecache)

This package is still WIP and sperimental.

<!-- ## Support us -->

## Installation

You can install the package via composer:

```bash
composer require marcoguidara/quick-laravel-responsecache
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="MarcoGuidara\QuickResponseCache\QuickResponseCacheServiceProvider"
```

This is the contents of the published config file:

```php
return [
    /*
     * Determine if the response cache should be enabled.
     */
    'enabled' => env('QUICK_RESPONSE_CACHE_ENABLED', true),

    /*
     * Default number of seconds responses must be cached.
     */
    'cache_lifetime_in_seconds' => env('QUICK_RESPONSE_CACHE_LIFETIME', 60 * 60 * 24 * 7),
];
```

## Usage

### Clearing cache

#### Manullay
```php
QuickResponseCache::clear();
```

#### Using command
```bash
php artisan responsecache:clear
```

```php
WIP
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Marco Guidara](https://github.com/marcoguidara)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
