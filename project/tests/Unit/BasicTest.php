<?php

declare(strict_types=1);

namespace App\tests\Unit;

use PHPUnit\Framework\TestCase;

class BasicTest extends TestCase
{
    public function testUnitEnvironnementIsOk(): void
    {
        $this->assertTrue(true);
    }
}
