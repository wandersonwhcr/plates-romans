# plates-romans

Plates Extension to Convert Arabic to Roman Numerals and Vice Versa

## Description

This package extension provides a Plates integration for
[Romans](https://github.com/wandersonwhcr/romans) library, providing methods to
convert a `string` with a Roman number to a `string` with Arabic and vice-versa.

## Installation

This package uses Composer as default repository. You can install it addint the
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

This package acts as a Plate extension and must be loaded with Plates Engine.

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
Arabic 1999 can be represented as <?php echo $this->arabicToRoman(1999) ?>.
```
