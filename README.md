# Displays your Changelog in Nova

[![Latest Version on Packagist](https://img.shields.io/packagist/v/orlyapps/nova-changelog.svg?style=flat-square)](https://packagist.org/packages/Orlyapps/nova-changelog)
[![Total Downloads](https://img.shields.io/packagist/dt/orlyapps/nova-changelog.svg?style=flat-square)](https://packagist.org/packages/Orlyapps/nova-changelog)


![alt text](https://raw.githubusercontent.com/orlyapps/nova-changelog/master/docs/screenshot.png "Example")



## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require orlyapps/nova-changelog
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Orlyapps\NovaChangelog\NovaChangelog(),
    ];
}
```

## Usage

Click on the "Changelog" menu item in your Nova app to see the tool provided by this package.

### Security

If you discover any security related issues, please email info@orlyapps.de instead of using the issue tracker.

## Credits

-   [Orlyapps](https://github.com/orlyapps)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
