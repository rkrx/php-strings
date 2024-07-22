<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class LastTest extends TestCase {
	public function testLastWithNull(): void {
		self::assertNull(last(null));
	}
	
	public function testLastWithEmptyString(): void {
		self::assertEquals('', last(''));
	}
	
	public function testLastWithSingleCharacter(): void {
		self::assertEquals('a', last('a'));
	}
	
	public function testLastWithMultipleCharacters(): void {
		self::assertEquals('d', last('abcd'));
	}
	
	public function testLastWithMultibyteCharacter(): void {
		self::assertEquals('界', last('你好世界'));
	}
	
	public function testLastWithEmoji(): void {
		self::assertEquals('😊', last('hello😊'));
	}
	
	public function testLastWithWhitespace(): void {
		self::assertEquals(' ', last('hello '));
	}
	
	public function testLastWithNewline(): void {
		self::assertEquals("\n", last("hello\n"));
	}
	
	public function testLastWithTab(): void {
		self::assertEquals("\t", last("hello\t"));
	}
	
	public function testLastWithSpecialCharacters(): void {
		self::assertEquals('!', last('hello!'));
	}
	
	public function testLastWithNegativeOffset(): void {
		self::assertEquals('d', last('abcd'));
	}
	
	public function testLastWithLongString(): void {
		$longString = str_repeat('a', 1000) . 'b';
		self::assertEquals('b', last($longString));
	}
}
