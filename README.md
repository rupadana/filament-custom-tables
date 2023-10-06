# This is my package filament-custom-tables

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rupadana/filament-custom-tables.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-custom-tables)
[![Total Downloads](https://img.shields.io/packagist/dt/rupadana/filament-custom-tables.svg?style=flat-square)](https://packagist.org/packages/rupadana/filament-custom-tables)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require rupadana/filament-custom-tables
```

## Usage

```php
TimeAgoColumn::make('created_at')
    ->dateLabel(seconds: 's', minutes: 'm', hours:'h', days:'d', months: 'M', years: 'Y')
    ->interval(2000) // default is 1000
```
Im extends `TextColumn` class, so You can use all method on `TextColumn` class


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Rupadana](https://github.com/rupadana)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
