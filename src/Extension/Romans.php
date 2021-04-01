<?php

declare(strict_types=1);

namespace League\Plates\Romans\Extension;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;

class Romans implements ExtensionInterface
{
    public function register(Engine $engine): void
    {
        unset($engine);
    }

    public function romanToArabic(string $roman): string
    {
        unset($roman);

        return '1';
    }
}
