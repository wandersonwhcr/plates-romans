<?php

declare(strict_types=1);

namespace League\Plates\Romans\Extension;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;
use Romans\Filter\IntToRoman as IntToRomanFilter;
use Romans\Filter\RomanToInt as RomanToIntFilter;

class Romans implements ExtensionInterface
{
    private ?IntToRomanFilter $intToRomanFilter = null;

    private ?RomanToIntFilter $romanToIntFilter = null;

    public function register(Engine $engine): void
    {
        $engine->registerFunction('arabicToRoman', [$this, 'arabicToRoman']);
        $engine->registerFunction('romanToArabic', [$this, 'romanToArabic']);
    }

    public function arabicToRoman(int|string $arabic): string
    {
        return $this->getIntToRomanFilter()->filter((int) $arabic);
    }

    public function romanToArabic(string $roman): string
    {
        return (string) $this->getRomanToIntFilter()->filter($roman);
    }

    public function getIntToRomanFilter(): IntToRomanFilter
    {
        $this->intToRomanFilter ??= new IntToRomanFilter();

        return $this->intToRomanFilter;
    }

    public function getRomanToIntFilter(): RomanToIntFilter
    {
        $this->romanToIntFilter ??= new RomanToIntFilter();

        return $this->romanToIntFilter;
    }
}
