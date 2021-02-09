# Effiliation PHP

![CI](https://github.com/encreinformatique/effiliation-php/workflows/CI/badge.svg)

This is a fork from [yuzu-co/effiliation-php](https://github.com/yuzu-co/effiliation-php)
While the original codebase supported PHP 5.6, I decided to drop it and PHP 7.0 to 7.1.
They ended their life and I do not use them either.

For those versions of PHP, please refer to the original codebase.

The name into the composer has now changed to `encreinformatique/effiliation-php`.

---

PHP library for the Effiliation API.

You can get your apiToken here: [http://publisher.effiliation.com/affiliev2/secure/profile.html?tab=identifiants](http://publisher.effiliation.com/affiliev2/secure/profile.html?tab=identifiants)

See full doc: [http://apiv2.effiliation.com/apiv2/doc/home.htm](http://apiv2.effiliation.com/apiv2/doc/home.htm)


## Install

Via Composer

``` bash
$ composer require yuzu-co/effiliation-php
```

## Usage

``` php
$apiToken = 'XXXXX'
$client = new Yuzu\Effiliation\Client($apiToken);
```

## Tests

```php
php composer test
```
