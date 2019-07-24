<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class StartKitTest extends TestCase
{
    /** @test */
    public function tesGetProjectVersion()
    {
        $this->assertEquals(App\StartKit::VER, '1.0');
    }
}
