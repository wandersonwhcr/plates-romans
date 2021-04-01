<?php

declare(strict_types=1);

namespace LeagueTest\Plates\Romans;

use League\Plates\Engine;
use League\Plates\Romans\Extension\Romans;
use PHPUnit\Framework\TestCase;

class EngineTest extends TestCase
{
    protected function setUp(): void
    {
        $this->engine = new Engine(__DIR__ . '/Template', 'phtml');

        $this->engine->loadExtension(new Romans());
    }

    public function testArabicToRoman(): void
    {
        $this->assertEquals('I', $this->engine->render('arabic-to-roman', ['arabic' => '1']));
        $this->assertEquals('MCMXCIX', $this->engine->render('arabic-to-roman', ['arabic' => '1999']));
    }

    public function testRomanToArabic(): void
    {
        $this->assertEquals('1', $this->engine->render('roman-to-arabic', ['roman' => 'I']));
        $this->assertEquals('1999', $this->engine->render('roman-to-arabic', ['roman' => 'MCMXCIX']));
    }
}
