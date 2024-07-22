<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class LowerTest extends TestCase {
	public function testLowerWithNull(): void {
		self::assertEquals(null, lower(null));
	}
	
	public function testLowerWithEmptyString(): void {
		self::assertEquals('', lower(''));
	}
	
	public function testLowerWithUppercaseString(): void {
		self::assertEquals('hello', lower('HELLO'));
	}
	
	public function testLowerWithMixedCaseString(): void {
		self::assertEquals('hello world', lower('HeLLo WoRLD'));
	}
	
	public function testLowerWithNonAlphabeticCharacters(): void {
		self::assertEquals('1234!@#$', lower('1234!@#$'));
	}
	
	public function testLowerWithUnicodeCharacters(): void {
		self::assertEquals('こんにちは', lower('こんにちは'));
	}
	
	public function testLowerWithUppercaseUnicodeCharacters(): void {
		self::assertEquals('ñandú', lower('ÑANDÚ'));
	}
}

