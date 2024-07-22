<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class EqualsTest extends TestCase {
	public function testEqualsWithBothStringsEqual(): void {
		self::assertEquals(true, equals('test', 'test'));
	}
	
	public function testEqualsWithDifferentStrings(): void {
		self::assertEquals(false, equals('test', 'different'));
	}
	
	public function testEqualsWithFirstStringNull(): void {
		self::assertEquals(false, equals(null, 'test'));
	}
	
	public function testEqualsWithSecondStringNull(): void {
		self::assertEquals(false, equals('test', null));
	}
	
	public function testEqualsWithBothStringsNull(): void {
		self::assertEquals(false, equals(null, null));
	}
}
