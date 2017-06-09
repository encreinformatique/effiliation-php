# Effiliation PHP

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
