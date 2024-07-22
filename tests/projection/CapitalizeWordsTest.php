<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class CapitalizeWordsTest extends TestCase {
	
	/**
	 * @dataProvider capitalizeWordsProvider
	 */
	public function testCapitalizeWords(?string $input, ?string $expected): void {
		self::assertEquals($expected, capitalizeWords($input));
	}
	
	public static function capitalizeWordsProvider(): array {
		return [
			'null input' => [null, null],
			'empty string' => ['', ''],
			'single word' => ['hello', 'Hello'],
			'multiple words' => ['hello world', 'Hello World'],
			'words with punctuation' => ['hello, world!', 'Hello, World!'],
			'words with numbers' => ['hello 123 world', 'Hello 123 World'],
			'non-latin characters' => ['привет мир', 'Привет Мир'],
			'mixed case' => ['hElLo WoRlD', 'HElLo WoRlD'],
		];
	}
}

