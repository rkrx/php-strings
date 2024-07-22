<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ContainsTest extends TestCase {
	public function testContainsWithValidStrings(): void {
		self::assertEquals(true, contains('hello world', 'world'));
		self::assertEquals(false, contains('hello world', 'planet'));
	}
	
	public function testContainsWithNullHaystack(): void {
		self::assertEquals(false, contains(null, 'world'));
	}
	
	public function testContainsWithNullNeedle(): void {
		self::assertEquals(false, contains('hello world', null));
	}
	
	public function testContainsWithBothNull(): void {
		self::assertEquals(false, contains(null, null));
	}
	
	public function testContainsWithEmptyStrings(): void {
		self::assertEquals(true, contains('', ''));
		self::assertEquals(true, contains('hello world', ''));
		self::assertEquals(false, contains('', 'world'));
	}
}
