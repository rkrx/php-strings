<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class PadLeadingTest extends TestCase {
	public function testLeadingSpaces(): void {
		self::assertEquals('    test', padLeading('test', 8, ' '));
	}
	
	public function testLeadingDashes(): void {
		self::assertEquals('----test', padLeading('test', 8, '-'));
	}
	
	public function testNoChange1(): void {
		self::assertEquals('test', padLeading('test', 4, '-'));
	}
	
	public function testNoChange2(): void {
		self::assertEquals('test', padLeading('test', 2, '-'));
	}
	
	public function testNullInput(): void {
		self::assertEquals(null, padLeading(null, 2, '-'));
		self::assertEquals('test', padLeading('test', 2, null));
	}
	
	public function testEnlargeEmptyString(): void {
		self::assertEquals('----', padLeading('', 4, '-'));
	}
	
	public function testPrependTwoByteString(): void {
		self::assertEquals('ababtest', padLeading('test', 8, 'ab'));
		self::assertEquals('bababtest', padLeading('test', 9, 'ab'));
	}
}

