<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class PadTrailingTest extends TestCase {
	public function testPadTrailingWithNullString(): void {
		self::assertNull(padTrailing(null, 10, ' '));
	}
	
	public function testPadTrailingWithEmptyString(): void {
		self::assertEquals('     ', padTrailing('', 5, ' '));
	}
	
	public function testPadTrailingWithShortString(): void {
		self::assertEquals('test  ', padTrailing('test', 6, ' '));
	}
	
	public function testPadTrailingWithExactLengthString(): void {
		self::assertEquals('test', padTrailing('test', 4, ' '));
	}
	
	public function testPadTrailingWithLongString(): void {
		self::assertEquals('testing', padTrailing('testing', 5, ' '));
	}
	
	public function testPadTrailingWithDifferentChar(): void {
		self::assertEquals('test--', padTrailing('test', 6, '-'));
	}
	
	public function testPadTrailingWithMultiByteChar(): void {
		self::assertEquals('testああ', padTrailing('test', 6, 'あ'));
	}
	
	public function testPadTrailingWithNegativeLength(): void {
		self::assertEquals('test', padTrailing('test', -1, 'x'));
	}
	
	public function testPadTrailingWithZeroLength(): void {
		self::assertEquals('test', padTrailing('test', 0, 'x'));
	}
}

