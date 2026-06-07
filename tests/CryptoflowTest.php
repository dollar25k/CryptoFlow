<?php
/**
 * Tests for CryptoFlow
 */

use PHPUnit\Framework\TestCase;
use Cryptoflow\Cryptoflow;

class CryptoflowTest extends TestCase {
    private Cryptoflow $instance;

    protected function setUp(): void {
        $this->instance = new Cryptoflow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptoflow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
