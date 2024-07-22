<?php

namespace rkr\str;

class TrimLeftTest extends \PHPUnit\Framework\TestCase {
	public function testTrimLeftWithNullString(): void {
		self::assertEquals(null, trimLeft(null, 'abc'));
	}
	
	public function testTrimLeftWithNullChars(): void {
		self::assertEquals('example', trimLeft('   example', null));
		self::assertEquals('example   ', trimLeft('example   ', null));
	}
	
	public function testTrimLeftWithSpecificChars(): void {
		self::assertEquals('example', trimLeft('abcabcexample', 'abc'));
		self::assertEquals('exampleabc', trimLeft('abcabcexampleabc', 'abc'));
	}
	
	public function testTrimLeftWithEmptyString(): void {
		self::assertEquals('', trimLeft('', 'abc'));
	}
	
	public function testTrimLeftWithEmptyChars(): void {
		self::assertEquals('example', trimLeft('example', ''));
	}
	
	public function testTrimLeftWithNoTrimmableChars(): void {
		self::assertEquals('example', trimLeft('example', 'xyz'));
	}
	
	public function testTrimLeftWithWhitespaceChars(): void {
		self::assertEquals('example', trimLeft('   example', ' '));
	}
	
	public function testTrimLeftWithMultibyteChars(): void {
		self::assertEquals('example', trimLeft('あああexample', 'あ'));
	}
	
	public function testTrimLeftWithSpecialChars(): void {
		self::assertEquals('example', trimLeft('!@#example', '!@#'));
	}
	
	public function testTrimLeftWithNullStringAndNullChars(): void {
		self::assertEquals(null, trimLeft(null, null));
	}
}
