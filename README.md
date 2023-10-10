# Easy Permalink Slugs for the FilamentPHP Form Builder (PHP / Laravel / Livewire)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/altwaireb/filament-title-and-slug.svg?style=flat-square)](https://packagist.org/packages/altwaireb/filament-title-and-slug)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/altwaireb/filament-title-and-slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/altwaireb/filament-title-and-slug/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/altwaireb/filament-title-and-slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/altwaireb/filament-title-and-slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/altwaireb/filament-title-and-slug.svg?style=flat-square)](https://packagist.org/packages/altwaireb/filament-title-and-slug)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require altwaireb/filament-title-and-slug
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-title-and-slug-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-title-and-slug-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-title-and-slug-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filament = new Altwaireb\Filament();
echo $filament->echoPhrase('Hello, Altwaireb!');
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

- [Abdulmajeed Altwaireb](https://github.com/altwaireb)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
