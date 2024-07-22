<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class BagDistanceTest extends TestCase {
	public function testBothStringsNull(): void {
		self::assertEquals(null, bagDistance(null, null));
	}
	
	public function testFirstStringNull(): void {
		self::assertEquals(null, bagDistance(null, 'test'));
	}
	
	public function testSecondStringNull(): void {
		self::assertEquals(null, bagDistance('test', null));
	}
	
	public function testBothStringsEmpty(): void {
		self::assertEquals(0, bagDistance('', ''));
	}
	
	public function testIdenticalStrings(): void {
		self::assertEquals(0, bagDistance('test', 'test'));
	}
	
	public function testDifferentStringsSameLength(): void {
		self::assertEquals(8, bagDistance('test', 'abcd'));
	}
	
	public function testDifferentStringsDifferentLength(): void {
		self::assertEquals(2, bagDistance('test', 'te'));
	}
	
	public function testStringsWithDifferentCharacters(): void {
		self::assertEquals(6, bagDistance('abc', 'def'));
	}
	
	public function testStringsWithSomeCommonCharacters(): void {
		self::assertEquals(4, bagDistance('aabbcc', 'abccdd'));
	}
}

