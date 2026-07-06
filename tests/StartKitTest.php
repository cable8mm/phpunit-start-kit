<?php

declare(strict_types=1);

namespace Cable8mm\PhpunitStartKit\Tests;

use Cable8mm\PhpunitStartKit\StartKit;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the StartKit class.
 */
final class StartKitTest extends TestCase
{
    private StartKit $startKit;

    /**
     * Initialize before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->startKit = new StartKit;
    }

    #[Test]
    public function it_can_be_instantiated(): void
    {
        $this->assertInstanceOf(StartKit::class, $this->startKit);
    }

    #[Test]
    public function example_method_returns_expected_string(): void
    {
        $result = $this->startKit->example();

        $this->assertIsString($result);
        $this->assertSame('Hello, PHPUnit Start Kit!', $result);
    }
}
