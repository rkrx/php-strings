<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class TrimTest extends TestCase {
	public function testTrimWithNullString(): void {
		self::assertEquals(null, trim(null, "abc"));
	}
	
	public function testTrimWithNullChars(): void {
		self::assertEquals("test", trim("  test  ", null));
	}
	
	public function testTrimWithWhitespaceChars(): void {
		self::assertEquals("test", trim("  test  ", " "));
	}
	
	public function testTrimWithSpecificChars(): void {
		self::assertEquals("test", trim("--test--", "-"));
	}
	
	public function testTrimWithEmptyString(): void {
		self::assertEquals("", trim("", "-"));
	}
	
	public function testTrimWithEmptyChars(): void {
		self::assertEquals("test", trim("test", ""));
	}
	
	public function testTrimWithNoTrimmingNeeded(): void {
		self::assertEquals("test", trim("test", "-"));
	}
	
	public function testTrimWithMultibyteChars(): void {
		self::assertEquals("test", trim("テストtestテスト", "テスト"));
	}
}

