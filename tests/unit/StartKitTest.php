<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class StartKitTest extends TestCase
{
    /** @test */
    public function testGetProjectVersion()
    {
        $this->assertEquals(App\StartKit::VER, '1.24');
    }
}
