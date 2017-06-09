# Effiliation PHP

[![Build Status](https://travis-ci.org/yuzu-co/effiliation-php.svg?branch=master)](https://travis-ci.org/yuzu-co/effiliation-php)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e8682a74-f9aa-4e70-92b5-9f58048d0e8f/mini.png)](https://insight.sensiolabs.com/projects/e8682a74-f9aa-4e70-92b5-9f58048d0e8f)

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
