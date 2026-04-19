<?php
/**
 * Tests for CryptoTracer
 */

use PHPUnit\Framework\TestCase;
use Cryptotracer\Cryptotracer;

class CryptotracerTest extends TestCase {
    private Cryptotracer $instance;

    protected function setUp(): void {
        $this->instance = new Cryptotracer(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cryptotracer::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
