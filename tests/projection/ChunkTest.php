<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ChunkTest extends TestCase {
	public function testChunkWithNullString(): void {
		self::assertEquals(null, chunk(null, 1));
	}
	
	public function testChunkWithEmptyString(): void {
		self::assertEquals([], chunk('', 1));
	}
	
	public function testChunkWithSingleCharacter(): void {
		self::assertEquals(['a'], chunk('a', 1));
	}
	
	public function testChunkWithMultipleCharacters(): void {
		self::assertEquals(['ab', 'cd', 'ef'], chunk('abcdef', 2));
	}
	
	public function testChunkWithNonDivisibleLength(): void {
		self::assertEquals(['abc', 'def', 'g'], chunk('abcdefg', 3));
	}
	
	public function testChunkWithLongerLengthThanString(): void {
		self::assertEquals(['abcdef'], chunk('abcdef', 10));
	}
	
	public function testChunkWithInvalidLength(): void {
		self::assertEquals([], chunk('abcdef', 0));
		self::assertEquals([], chunk('abcdef', -1));
	}
}
