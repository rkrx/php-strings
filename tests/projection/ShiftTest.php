<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ShiftTest extends TestCase {
	public function testShiftWithNullString(): void {
		self::assertNull(shift(null, 5));
	}
	
	public function testShiftWithEmptyString(): void {
		self::assertEquals(['', ''], shift('', 5));
	}
	
	public function testShiftWithLengthGreaterThanStringLength(): void {
		self::assertEquals(['', 'abc'], shift('abc', 5));
	}
	
	public function testShiftWithLengthEqualToStringLength(): void {
		self::assertEquals(['', 'abc'], shift('abc', 3));
	}
	
	public function testShiftWithLengthLessThanStringLength(): void {
		self::assertEquals(['def', 'abc'], shift('abcdef', 3));
	}
	
	public function testShiftWithMultibyteString(): void {
		self::assertEquals(['にちは', 'こん'], shift('こんにちは', 2));
	}
	
	public function testShiftWithNegativeLength(): void {
		self::assertEquals(['bc', 'a'], shift('abc', -2));
		self::assertEquals(['abc', ''], shift('abc', -4));
	}
	
	public function testShiftWithZeroLength(): void {
		self::assertEquals(['abc', ''], shift('abc', 0));
	}
}

