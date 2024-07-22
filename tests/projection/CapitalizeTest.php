<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class CapitalizeTest extends TestCase {
	
	public function testCapitalizeWithNull(): void {
		self::assertEquals(null, capitalize(null));
	}
	
	public function testCapitalizeWithEmptyString(): void {
		self::assertEquals('', capitalize(''));
	}
	
	public function testCapitalizeWithSingleCharacter(): void {
		self::assertEquals('A', capitalize('a'));
	}
	
	public function testCapitalizeWithMultipleCharacters(): void {
		self::assertEquals('Hello', capitalize('hello'));
	}
	
	public function testCapitalizeWithNonAlphabeticFirstCharacter(): void {
		self::assertEquals('1abc', capitalize('1abc'));
	}
	
	public function testCapitalizeWithUnicodeCharacters(): void {
		self::assertEquals('Äpfel', capitalize('äpfel'));
	}
	
	public function testCapitalizeWithAlreadyCapitalizedString(): void {
		self::assertEquals('Hello', capitalize('Hello'));
	}
	
	public function testCapitalizeWithMixedCaseString(): void {
		self::assertEquals('HelloWorld', capitalize('helloWorld'));
	}
}

