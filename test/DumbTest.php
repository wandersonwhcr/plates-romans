<?php

declare(strict_types=1);

namespace PlatesTest\Romans;

use PHPUnit\Framework\TestCase;
use Plates\Romans\Dumb;

class DumbTest extends TestCase
{
    public function testTrue(): void
    {
        $dumb = new Dumb();

        $this->assertTrue($dumb->getTrue());
    }
}
