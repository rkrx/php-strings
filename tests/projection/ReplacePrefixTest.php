<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReplacePrefixTest extends TestCase {
	public function testReplacePrefixWithValidInputs(): void {
		self::assertEquals('new_prefix_string', replacePrefix('old_prefix_string', 'old_prefix', 'new_prefix'));
		self::assertEquals('replacement_string', replacePrefix('prefix_string', 'prefix', 'replacement'));
		self::assertEquals('new_prefix', replacePrefix('old_prefix', 'old_prefix', 'new_prefix'));
	}
	
	public function testReplacePrefixWithNullString(): void {
		self::assertEquals(null, replacePrefix(null, 'prefix', 'replacement'));
	}
	
	public function testReplacePrefixWithNullPrefix(): void {
		self::assertEquals(null, replacePrefix('string', null, 'replacement'));
	}
	
	public function testReplacePrefixWithNullReplacement(): void {
		self::assertEquals('string', replacePrefix('string', 'prefix', null));
		self::assertEquals('prefix_string', replacePrefix('prefix_string', 'prefix', null));
	}
	
	public function testReplacePrefixWithNonMatchingPrefix(): void {
		self::assertEquals('string', replacePrefix('string', 'prefix', 'replacement'));
		self::assertEquals('another_string', replacePrefix('another_string', 'prefix', 'replacement'));
	}
	
	public function testReplacePrefixWithEmptyPrefix(): void {
		self::assertEquals('replacementstring', replacePrefix('string', '', 'replacement'));
	}
	
	public function testReplacePrefixWithEmptyString(): void {
		self::assertEquals('replacement', replacePrefix('', '', 'replacement'));
		self::assertEquals('', replacePrefix('', 'prefix', 'replacement'));
	}
}

