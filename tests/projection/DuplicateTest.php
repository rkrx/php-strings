<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class DuplicateTest extends TestCase {
	public function testDuplicateStringMultipleTimes(): void {
		$result = duplicate('abc', 3);
		self::assertEquals('abcabcabc', $result);
	}
	
	public function testDuplicateStringZeroTimes(): void {
		$result = duplicate('abc', 0);
		self::assertEquals('', $result);
	}
	
	public function testDuplicateEmptyString(): void {
		$result = duplicate('', 5);
		self::assertEquals('', $result);
	}
	
	public function testDuplicateNullString(): void {
		$result = duplicate(null, 3);
		self::assertNull($result);
	}
	
	public function testDuplicateStringNegativeTimes(): void {
		$result = duplicate('abc', -1);
		self::assertEquals('', $result);
	}
	
	public function testDuplicateStringOneTime(): void {
		$result = duplicate('abc', 1);
		self::assertEquals('abc', $result);
	}
}
