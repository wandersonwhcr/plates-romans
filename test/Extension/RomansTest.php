<?php

declare(strict_types=1);

namespace LeagueTest\Plates\Extension;

use League\Plates\Extension\ExtensionInterface;
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
}
