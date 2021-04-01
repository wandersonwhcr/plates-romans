<?php

declare(strict_types=1);

namespace LeagueTest\Plates\Romans;

use League\Plates\Romans\Dumb;
use PHPUnit\Framework\TestCase;

class DumbTest extends TestCase
{
    public function testTrue(): void
    {
        $dumb = new Dumb();

        $this->assertTrue($dumb->getTrue());
    }
}
