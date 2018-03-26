# Laravel Articles

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Articles/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Articles)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-articles.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Articles.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Articles/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Articles.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Articles)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-articles
```

To get started, you'll need to publish the vendor assets and migrate:

```
php artisan vendor:publish --provider="BrianFaust\Articles\ArticlesServiceProvider" && php artisan migrate
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
