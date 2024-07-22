<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class LastIndexOfTest extends TestCase {
	public function testLastIndexOfWithValidInputs(): void {
		self::assertEquals(3, lastIndexOf('hello', 'l', 0));
		self::assertEquals(4, lastIndexOf('hello', 'o', 0));
		self::assertEquals(0, lastIndexOf('hello', 'h', 0));
		self::assertEquals(null, lastIndexOf('hello', 'z', 0));
	}
	
	public function testLastIndexOfWithNullHaystack(): void {
		self::assertEquals(null, lastIndexOf(null, 'l', 0));
	}
	
	public function testLastIndexOfWithNullNeedle(): void {
		self::assertEquals(null, lastIndexOf('hello', null, 0));
	}
	
	public function testLastIndexOfWithBothNull(): void {
		self::assertEquals(null, lastIndexOf(null, null, 0));
	}
	
	public function testLastIndexOfWithOffset(): void {
		self::assertEquals(3, lastIndexOf('hello', 'l', 1));
		self::assertEquals(3, lastIndexOf('hello', 'l', -1));
		self::assertEquals(3, lastIndexOf('hello', 'l', -2));
		self::assertEquals(2, lastIndexOf('hello', 'l', -3));
		self::assertEquals(null, lastIndexOf('hello', 'l', -4));
	}
}
