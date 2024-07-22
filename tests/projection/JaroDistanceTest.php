<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class JaroDistanceTest extends TestCase {
	public function testNullInputs(): void {
		self::assertNull(jaroDistance(null, null));
		self::assertNull(jaroDistance(null, 'test'));
		self::assertNull(jaroDistance('test', null));
	}
	
	public function testEmptyStrings(): void {
		self::assertEquals(1.0, jaroDistance('', ''));
	}
	
	public function testOneEmptyString(): void {
		self::assertEquals(0.0, jaroDistance('', 'test'));
		self::assertEquals(0.0, jaroDistance('test', ''));
	}
	
	public function testIdenticalStrings(): void {
		self::assertEquals(1.0, jaroDistance('test', 'test'));
	}
	
	public function testCompletelyDifferentStrings(): void {
		self::assertEquals(0.0, jaroDistance('abc', 'xyz'));
	}
	
	public function testPartiallyMatchingStrings(): void {
		self::assertEquals(0.9444444444444445, jaroDistance('MARTHA', 'MARHTA'));
		self::assertEquals(0.8222222222222223, jaroDistance('DWAYNE', 'DUANE'));
		self::assertEquals(0.7666666666666666, jaroDistance('DIXON', 'DICKSONX'));
	}
}
