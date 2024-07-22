<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class IndexOfTest extends TestCase {
	public function testIndexOfWithValidInputs(): void {
		self::assertEquals(0, indexOf('hello world', 'hello', 0));
		self::assertEquals(6, indexOf('hello world', 'world', 0));
		self::assertEquals(3, indexOf('foobar', 'bar', 3));
		self::assertEquals(3, indexOf('foobar', 'bar', 0));
	}
	
	public function testIndexOfWithNullHaystack(): void {
		self::assertEquals(null, indexOf(null, 'needle', 0));
	}
	
	public function testIndexOfWithNullNeedle(): void {
		self::assertEquals(null, indexOf('haystack', null, 0));
	}
	
	public function testIndexOfWithNullHaystackAndNeedle(): void {
		self::assertEquals(null, indexOf(null, null, 0));
	}
	
	public function testIndexOfWithOffset(): void {
		self::assertEquals(7, indexOf('hello world', 'o', 5));
		self::assertEquals(null, indexOf('hello world', 'hello', 1));
	}
	
	public function testIndexOfWithNonExistingNeedle(): void {
		self::assertEquals(null, indexOf('hello world', 'test', 0));
	}
}
