<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReplaceSuffixTest extends TestCase {
	
	public function testReplaceSuffixWithValidInputs(): void {
		self::assertEquals('hello world', replaceSuffix('hello mars', 'mars', 'world'));
		self::assertEquals('hello', replaceSuffix('hello', '', 'world'));
		self::assertEquals('hello', replaceSuffix('hello', 'mars', ''));
		self::assertEquals('hello', replaceSuffix('hello', 'mars', null));
	}
	
	public function testReplaceSuffixWithNullString(): void {
		self::assertEquals(null, replaceSuffix(null, 'mars', 'world'));
	}
	
	public function testReplaceSuffixWithNullSuffix(): void {
		self::assertEquals(null, replaceSuffix('hello mars', null, 'world'));
	}
	
	public function testReplaceSuffixWithNullReplacement(): void {
		self::assertEquals('hello mars', replaceSuffix('hello mars', 'mars', null));
	}
	
	public function testReplaceSuffixWithNonMatchingSuffix(): void {
		self::assertEquals('hello mars', replaceSuffix('hello mars', 'world', 'venus'));
	}
	
	public function testReplaceSuffixWithEmptySuffix(): void {
		self::assertEquals('hello', replaceSuffix('hello', '', 'world'));
	}
	
	public function testReplaceSuffixWithEmptyString(): void {
		self::assertEquals('', replaceSuffix('', 'mars', 'world'));
	}
}

