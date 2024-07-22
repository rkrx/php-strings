<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class CharactersTest extends TestCase {
	public function testCharactersWithNullString(): void {
		self::assertEquals(null, characters(null));
	}
	
	public function testCharactersWithEmptyString(): void {
		self::assertEquals([], characters(""));
	}
	
	public function testCharactersWithSingleCharacter(): void {
		self::assertEquals(['a'], characters('a'));
	}
	
	public function testCharactersWithMultipleCharacters(): void {
		self::assertEquals(['a', 'b', 'c'], characters('abc'));
	}
	
	public function testCharactersWithUnicodeCharacters(): void {
		self::assertEquals(['あ', 'い', 'う'], characters('あいう'));
	}
	
	public function testCharactersWithMixedCharacters(): void {
		self::assertEquals(['a', '1', 'あ'], characters('a1あ'));
	}
	
	public function testCharactersWithSpecialCharacters(): void {
		self::assertEquals(['@', '#', '$'], characters('@#$'));
	}
}
