# plates-romans

Plates Extension to Convert Arabic to Roman Numerals and Vice Versa

[![Build Status](https://github.com/wandersonwhcr/plates-romans/actions/workflows/test.yml/badge.svg?branch=main)](https://github.com/wandersonwhcr/plates-romans/actions/workflows/test.yml?query=branch%3Amain)
[![Latest Stable Version](https://poser.pugx.org/wandersonwhcr/plates-romans/v/stable?format=flat)](https://packagist.org/packages/wandersonwhcr/plates-romans)
[![License](https://poser.pugx.org/wandersonwhcr/plates-romans/license?format=flat)](https://packagist.org/packages/wandersonwhcr/plates-romans)

## Description

This package extension provides a Plates integration for
[Romans](https://github.com/wandersonwhcr/romans) library, providing methods to
convert a `string` with a Roman number to a `string` with Arabic and vice-versa.

## Installation

This package uses Composer as default repository. You can install it adding the
name of package in `require` attribute of `composer.json`, pointing to the last
stable version.

```json
{
  "require": {
    "wandersonwhcr/plates-romans": "^1.0"
  }
}
```

## Usage

This package acts as a Plates extension and must be loaded with Plates Engine.

```php
use League\Plates\Engine;
use League\Plates\Romans\Extension\Romans as RomansExtension;

$engine = new Engine();

$engine->loadExtension(new RomansExtension());
```

After, methods `arabicToRoman` and `romanToArabic` can be used inside templates
as example below.

```
// Outputs MCMXCIX
Arabic 1999 can be represented as <?php echo $this->arabicToRoman('1999') ?> Roman Numeral.
```

```
// Outputs 2021
Roman MMXXI can be represented as <?php echo $this->romanToArabic('MMXXI') ?> Arabic Numeral.
```

Also, errors can be handled using a _try..catch_ syntax.

```php
use League\Plates\Romans\Extension\Exception as ExtensionException;

try {
    $this->arabicToRoman('-1');
} catch (ExtensionException $e) {
    // Invalid Integer: -1
}

try {
    $this->romanToArabic('Z');
} catch (ExtensionException $e) {
    // Invalid Token: Z
}
```

## Development

You can use Docker Compose to build an image and run a container to develop and
test this package.

```bash
docker-compose build
docker-compose run romans composer install
docker-compose run romans composer test
```

## License

This package is opensource and available under MIT license described in
[LICENSE](https://github.com/wandersonwhcr/plates-romans/blob/main/LICENSE).
