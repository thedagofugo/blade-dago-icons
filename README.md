# Blade Dagoicons

<a href="https://github.com/thedagofugo/blade-dagoicons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-dagoicons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/thedagofugo/blade-dagoicons">
    <img src="https://img.shields.io/packagist/v/thedagofugo/blade-dagoicons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/thedagofugo/blade-dagoicons">
    <img src="https://img.shields.io/packagist/dt/thedagofugo/blade-dagoicons" alt="Total Downloads">
</a>

A package to easily make use of [Dagoicons](https://github.com/refactoringui/Dagoicons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [Dagoicons.com](https://Dagoicons.com/).

## Requirements

- PHP 8.2 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require thedagofugo/blade-dagoicons
```

## Updating

Please refer to [`the upgrade guide`](UPGRADE.md) when updating the library.

## Blade Icons

Blade Dagoicons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Dagoicons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-dagoicons.php` config file:

```bash
php artisan vendor:publish --tag=blade-dagoicons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-heroicon-o-adjustments/>
```

You can also pass classes to your icon components:

```blade
<x-heroicon-o-adjustments class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-heroicon-o-adjustments style="color: #555"/>
```

The solid icons can be referenced like this:

```blade
<x-heroicon-s-adjustments/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-dagoicons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-dagoicons/o-adjustments.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Dagoicons is developed and maintained by TheDagofugo.

## License

Blade Dagoicons is open-sourced software licensed under [the MIT license](LICENSE.md).
