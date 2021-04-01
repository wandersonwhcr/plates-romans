<?php

declare(strict_types=1);

namespace LeagueTest\Plates\Romans\Extension;

use League\Plates\Extension\ExtensionInterface;
use League\Plates\Romans\Extension\Exception;
use League\Plates\Romans\Extension\Romans;
use PHPUnit\Framework\TestCase;

class RomansTest extends TestCase
{
    protected function setUp(): void
    {
        $this->romans = new Romans();
    }

    public function testInterface(): void
    {
        $this->assertInstanceOf(ExtensionInterface::class, $this->romans);
    }

    public function testArabicToRoman(): void
    {
        $this->assertEquals('I', $this->romans->arabicToRoman('1'));
        $this->assertEquals('MCMXCIX', $this->romans->arabicToRoman('1999'));
    }

    public function testArabicToRomanAsInt(): void
    {
        $this->assertEquals('I', $this->romans->arabicToRoman(1));
        $this->assertEquals('MCMXCIX', $this->romans->arabicToRoman(1999));
    }

    public function testRomanToArabic(): void
    {
        $this->assertEquals('1', $this->romans->romanToArabic('I'));
        $this->assertEquals('1999', $this->romans->romanToArabic('MCMXCIX'));
    }

    public function testInvalidRoman(): void
    {
        $this->expectException(Exception::class);

        $this->romans->romanToArabic('Z');
    }
}
