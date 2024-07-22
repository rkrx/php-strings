<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class UpperTest extends TestCase {
	public function testUpperWithNull(): void {
		self::assertEquals(null, upper(null));
	}
	
	public function testUpperWithEmptyString(): void {
		self::assertEquals('', upper(''));
	}
	
	public function testUpperWithLowercase(): void {
		self::assertEquals('HELLO', upper('hello'));
	}
	
	public function testUpperWithUppercase(): void {
		self::assertEquals('HELLO', upper('HELLO'));
	}
	
	public function testUpperWithMixedCase(): void {
		self::assertEquals('HELLO WORLD', upper('HeLLo WoRLd'));
	}
	
	public function testUpperWithSpecialCharacters(): void {
		self::assertEquals('ÄÖÜ', upper('äöü'));
	}
	
	public function testUpperWithNumbers(): void {
		self::assertEquals('123', upper('123'));
	}
	
	public function testUpperWithAlphanumeric(): void {
		self::assertEquals('HELLO123', upper('hello123'));
	}
	
	public function testUpperWithWhitespace(): void {
		self::assertEquals(' HELLO ', upper(' hello '));
	}
	
	public function testUpperWithNewline(): void {
		self::assertEquals("HELLO\nWORLD", upper("hello\nworld"));
	}
	
	public function testUpperWithTabs(): void {
		self::assertEquals("HELLO\tWORLD", upper("hello\tworld"));
	}
}

