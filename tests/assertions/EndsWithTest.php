<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class EndsWithTest extends TestCase {
	public function testEndsWithNullHaystack(): void {
		self::assertFalse(endsWith(null, 'test'));
	}
	
	public function testEndsWithNullNeedle(): void {
		self::assertFalse(endsWith('haystack', null));
	}
	
	public function testEndsWithEmptyNeedle(): void {
		self::assertTrue(endsWith('haystack', ''));
	}
	
	public function testEndsWithExactMatch(): void {
		self::assertTrue(endsWith('haystack', 'haystack'));
	}
	
	public function testEndsWithPartialMatch(): void {
		self::assertTrue(endsWith('haystack', 'stack'));
	}
	
	public function testEndsWithNoMatch(): void {
		self::assertFalse(endsWith('haystack', 'needle'));
	}
	
	public function testEndsWithEmptyHaystack(): void {
		self::assertFalse(endsWith('', 'needle'));
	}
	
	public function testEndsWithEmptyHaystackAndNeedle(): void {
		self::assertTrue(endsWith('', ''));
	}
	
	public function testEndsWithMultibyteCharacters(): void {
		self::assertTrue(endsWith('こんにちは', 'にちは'));
		self::assertFalse(endsWith('こんにちは', 'こんに'));
	}
	
	public function testEndsWithSpecialCharacters(): void {
		self::assertTrue(endsWith('hello!@#$', '!@#$'));
		self::assertFalse(endsWith('hello!@#$', 'hello'));
	}
}
