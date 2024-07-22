<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class StartsWithTest extends TestCase {
	
	public function testStartsWithValidCases(): void {
		self::assertEquals(true, startsWith('hello world', 'hello'));
		self::assertEquals(true, startsWith('hello world', 'h'));
		self::assertEquals(false, startsWith('hello world', 'world'));
		self::assertEquals(true, startsWith('hello', ''));
	}
	
	public function testStartsWithNullHaystack(): void {
		self::assertEquals(false, startsWith(null, 'hello'));
	}
	
	public function testStartsWithNullNeedle(): void {
		self::assertEquals(false, startsWith('hello world', null));
	}
	
	public function testStartsWithBothNull(): void {
		self::assertEquals(false, startsWith(null, null));
	}
	
	public function testStartsWithEmptyNeedle(): void {
		self::assertEquals(true, startsWith('hello world', ''));
	}
	
	public function testStartsWithEmptyHaystack(): void {
		self::assertEquals(false, startsWith('', 'hello'));
	}
}
