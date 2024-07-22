<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class SubstrTest extends TestCase {
	public function testSubstrWithNullString(): void {
		self::assertEquals(null, substr(null, 0, 5));
	}
	
	public function testSubstrWithPositiveStart(): void {
		self::assertEquals('Hello', substr('Hello World', 0, 5));
	}
	
	public function testSubstrWithNegativeStart(): void {
		self::assertEquals('World', substr('Hello World', -5, 5));
	}
	
	public function testSubstrWithNullLength(): void {
		self::assertEquals('World', substr('Hello World', 6, null));
	}
	
	public function testSubstrWithNegativeLength(): void {
		self::assertEquals('Hello', substr('Hello World', 0, -6));
	}
	
	public function testSubstrWithStartOutOfRange(): void {
		self::assertEquals('', substr('Hello', 10, 2));
	}
	
	public function testSubstrWithLengthOutOfRange(): void {
		self::assertEquals('Hello', substr('Hello', 0, 10));
	}
	
	public function testSubstrWithNegativeStartAndLength(): void {
		self::assertEquals('Wor', substr('Hello World', -5, -2));
	}
}
