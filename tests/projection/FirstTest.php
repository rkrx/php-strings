<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase {
	public function testFirstWithNull(): void {
		self::assertEquals(null, first(null));
	}
	
	public function testFirstWithEmptyString(): void {
		self::assertEquals('', first(''));
	}
	
	public function testFirstWithSingleCharacter(): void {
		self::assertEquals('a', first('a'));
	}
	
	public function testFirstWithMultipleCharacters(): void {
		self::assertEquals('a', first('abc'));
	}
	
	public function testFirstWithUnicodeCharacters(): void {
		self::assertEquals('你', first('你好'));
	}
	
	public function testFirstWithWhitespace(): void {
		self::assertEquals(' ', first(' abc'));
	}
	
	public function testFirstWithSpecialCharacters(): void {
		self::assertEquals('@', first('@home'));
	}
	
	public function testFirstWithEmoji(): void {
		self::assertEquals('✅', first('✅home'));
	}
}
