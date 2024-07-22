<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class AtTest extends TestCase {
	public function testAtWithValidStringAndPosition(): void {
		self::assertEquals('e', at('hello', 1));
		self::assertEquals('o', at('hello', 4));
		self::assertEquals('你', at('你好', 0));
	}
	
	public function testAtWithNullString(): void {
		self::assertEquals(null, at(null, 1));
	}
	
	public function testAtWithNullPosition(): void {
		self::assertEquals(null, at('hello', null));
	}
	
	public function testAtWithNullStringAndPosition(): void {
		self::assertEquals(null, at(null, null));
	}
	
	public function testAtWithNegativePosition(): void {
		self::assertEquals('o', at('hello', -1));
	}
	
	public function testAtWithPositionOutOfBounds(): void {
		self::assertEquals('', at('hello', 10));
	}
	
	public function testAtWithEmptyString(): void {
		self::assertEquals('', at('', 0));
	}
}
