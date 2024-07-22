<?php

namespace rkr\str;

use Normalizer;
use PHPUnit\Framework\TestCase;

class NormalizeTest extends TestCase {
	public function testNormalizeNFC(): void {
		$string = "é";
		$expected = normalizer_normalize($string, Normalizer::NFC);
		self::assertEquals($expected, normalize($string, 'NFC'));
	}
	
	public function testNormalizeNFD(): void {
		$string = "é";
		$expected = normalizer_normalize($string, Normalizer::NFD);
		self::assertEquals($expected, normalize($string, 'NFD'));
	}
	
	public function testNormalizeNFKC(): void {
		$string = "é";
		$expected = normalizer_normalize($string, Normalizer::NFKC);
		self::assertEquals($expected, normalize($string, 'NFKC'));
	}
	
	public function testNormalizeNFKD(): void {
		$string = "é";
		$expected = normalizer_normalize($string, Normalizer::NFKD);
		self::assertEquals($expected, normalize($string, 'NFKD'));
	}
	
	public function testNormalizeNullString(): void {
		self::assertNull(normalize(null, 'NFC'));
	}
	
	public function testNormalizeInvalidForm(): void {
		$this->expectException(\Error::class);
		normalize("é", 'INVALID');
	}
}
