<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class TrimRightTest extends TestCase {
	public function testTrimRightWithNullString(): void {
		self::assertEquals(null, trimRight(null, 'abc'));
	}
	
	public function testTrimRightWithNullChars(): void {
		self::assertEquals('test', trimRight('test ', null));
		self::assertEquals('test', trimRight('test', null));
	}
	
	public function testTrimRightWithWhitespaceChars(): void {
		self::assertEquals('test', trimRight('test ', ' '));
		self::assertEquals('test', trimRight('test  ', ' '));
	}
	
	public function testTrimRightWithSpecificChars(): void {
		self::assertEquals('test', trimRight('testabc', 'abc'));
		self::assertEquals('test', trimRight('testcba', 'abc'));
	}
	
	public function testTrimRightWithNoCharsToTrim(): void {
		self::assertEquals('test', trimRight('test', 'abc'));
	}
}

