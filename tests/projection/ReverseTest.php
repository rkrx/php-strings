<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReverseTest extends TestCase {
	
	public function testReverseWithNull(): void {
		self::assertEquals(null, reverse(null));
	}
	
	public function testReverseWithEmptyString(): void {
		self::assertEquals('', reverse(''));
	}
	
	public function testReverseWithSingleCharacter(): void {
		self::assertEquals('a', reverse('a'));
	}
	
	public function testReverseWithMultipleCharacters(): void {
		self::assertEquals('cba', reverse('abc'));
	}
	
	public function testReverseWithUnicodeCharacters(): void {
		self::assertEquals("\u{27A1}\u{2B05}", reverse("\u{2B05}\u{27A1}"));
	}
	
	public function testReverseWithWhitespace(): void {
		self::assertEquals('cba ', reverse(' abc'));
	}
	
	public function testReverseWithSpecialCharacters(): void {
		self::assertEquals('!@#$', reverse('$#@!'));
	}
	
	public function testReverseWithNumbers(): void {
		self::assertEquals('321', reverse('123'));
	}
	
	public function testReverseWithMixedCharacters(): void {
		self::assertEquals('1a2b3c', reverse('c3b2a1'));
	}
	
}
