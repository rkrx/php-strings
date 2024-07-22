<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReplaceFirstTest extends TestCase {
	
	public function testReplaceFirstOccurrence() {
		self::assertEquals('Hello World', replaceFirst('Hello Foo', 'Foo', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithMultipleNeedles() {
		self::assertEquals('Hello World Foo', replaceFirst('Hello Foo Foo', 'Foo', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithNoNeedle() {
		self::assertEquals('Hello Foo', replaceFirst('Hello Foo', 'Bar', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithNullHaystack() {
		self::assertEquals(null, replaceFirst(null, 'Foo', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithNullNeedle() {
		self::assertEquals(null, replaceFirst('Hello Foo', null, 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithNullReplacement() {
		self::assertEquals('Hello ', replaceFirst('Hello Foo', 'Foo', null));
	}
	
	public function testReplaceFirstOccurrenceWithEmptyHaystack() {
		self::assertEquals('', replaceFirst('', 'Foo', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithEmptyNeedle() {
		self::assertEquals('Hello Foo', replaceFirst('Hello Foo', '', 'World'));
	}
	
	public function testReplaceFirstOccurrenceWithEmptyReplacement() {
		self::assertEquals('Hello ', replaceFirst('Hello Foo', 'Foo', ''));
	}
	
	public function testReplaceFirstOccurrenceWithSpecialCharacters() {
		self::assertEquals('Hello 🌍', replaceFirst('Hello 🌎', '🌎', '🌍'));
	}
	
}
