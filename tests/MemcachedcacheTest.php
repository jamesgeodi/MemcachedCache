<?php
/**
 * Tests for MemcachedCache
 */

use PHPUnit\Framework\TestCase;
use Memcachedcache\Memcachedcache;

class MemcachedcacheTest extends TestCase {
    private Memcachedcache $instance;

    protected function setUp(): void {
        $this->instance = new Memcachedcache(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Memcachedcache::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
