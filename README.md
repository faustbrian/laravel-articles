# Laravel Articles

[![Build Status](https://img.shields.io/travis/artisanry/Articles/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Articles)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/articles.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Articles.svg?style=flat-square)](https://github.com/artisanry/Articles/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Articles.svg?style=flat-square)](https://packagist.org/packages/artisanry/Articles)

## Installation

You can install the package via composer:

```bash
composer require artisanry/articles
```

You must publish the migration with:

```bash
php artisan vendor:publish --provider="Artisanry\Articles\ArticlesServiceProvider" --tag="migrations"
```

Migrate the `articles` table:

```bash
php artisan migrate
```

Optionally you can publish the config-file with:

```bash
php artisan vendor:publish --provider="Artisanry\Articles\ArticlesServiceProvider" --tag="config"
```

This is the contents of the file which will be published at `config/articles.php`

```php
return [

    /*
     * The class name of the article model that holds all articles.
     *
     * The model must be or extend `Artisanry\Articles\Article`.
     */

    'article_model' => \Artisanry\Articles\Article::class,

    /*
     * The class name of the author model that owns all articles.
     */

    'author_model' => \App\User::class,

];
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
