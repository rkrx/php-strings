<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class LengthTest extends TestCase {
	public function testLengthWithNull(): void {
		self::assertEquals(null, length(null));
	}
	
	public function testLengthWithEmptyString(): void {
		self::assertEquals(0, length(''));
	}
	
	public function testLengthWithAsciiString(): void {
		self::assertEquals(5, length('Hello'));
	}
	
	public function testLengthWithMultibyteString(): void {
		self::assertEquals(5, length('こんにちは'));
	}
	
	public function testLengthWithWhitespaceString(): void {
		self::assertEquals(3, length('   '));
	}
	
	public function testLengthWithSpecialCharacters(): void {
		self::assertEquals(6, length('!@#$%^'));
	}
	
	public function testLengthWithNewlineCharacters(): void {
		self::assertEquals(1, length("\n"));
	}
	
	public function testLengthWithTabCharacters(): void {
		self::assertEquals(1, length("\t"));
	}
	
	public function testLengthWithMixedCharacters(): void {
		self::assertEquals(11, length('Hello こんにちは'));
	}
	
	public function testLengthWithLongString(): void {
		$longString = str_repeat('a', 1000);
		self::assertEquals(1000, length($longString));
	}
}

