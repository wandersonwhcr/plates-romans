<?php

declare(strict_types=1);

namespace League\Plates\Romans\Extension;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;
use Romans\Filter\IntToRoman;
use Romans\Filter\RomanToInt;

class Romans implements ExtensionInterface
{
    public function register(Engine $engine): void
    {
        $engine->registerFunction('arabicToRoman', [$this, 'arabicToRoman']);
        $engine->registerFunction('romanToArabic', [$this, 'romanToArabic']);
    }

    public function arabicToRoman(string $arabic): string
    {
        $filter = new IntToRoman();

        return $filter->filter((int) $arabic);
    }

    public function romanToArabic(string $roman): string
    {
        $filter = new RomanToInt();

        return (string) $filter->filter($roman);
    }
}
