<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class MyersDifferenceTest extends TestCase {
	public function testMyersDifferenceWithIdenticalStrings(): void {
		$result = myersDifference('abc', 'abc');
		self::assertEquals(0, $result);
	}
	
	public function testMyersDifferenceWithUnidenticalStrings(): void {
		$result = myersDifference('Привет мир', 'Привет миир');
		self::assertEquals(1, $result);
	}
	
	public function testMyersDifferenceWithEmptyStrings(): void {
		$result = myersDifference('', '');
		self::assertEquals(0, $result);
	}
	
	public function testMyersDifferenceWithOneEmptyString(): void {
		$result = myersDifference('abc', '');
		self::assertEquals(3, $result);
	}
	
	public function testMyersDifferenceWithDifferentStrings(): void {
		$result = myersDifference('Привет мир', 'Привет Солнце');
		self::assertEquals(3, $result);
	}
	
	public function testMyersDifferenceWithPartiallyMatchingStrings(): void {
		$result = myersDifference('abc', 'a');
		self::assertEquals(2, $result);
	}
	
	public function testMyersDifferenceWithNullFirstString(): void {
		$result = myersDifference(null, 'abc');
		self::assertEquals(null, $result);
	}
	
	public function testMyersDifferenceWithNullSecondString(): void {
		$result = myersDifference('abc', null);
		self::assertEquals(null, $result);
	}
	
	public function testMyersDifferenceWithBothNullStrings(): void {
		$result = myersDifference(null, null);
		self::assertEquals(null, $result);
	}
}
