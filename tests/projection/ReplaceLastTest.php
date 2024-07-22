<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReplaceLastTest extends TestCase {
	public function testReplaceLastWithValidInputs(): void {
		$this->assertEquals('Hello World', replaceLast('Hello World', 'Universe', 'World'));
		$this->assertEquals('Hello Universe', replaceLast('Hello World', 'World', 'Universe'));
		$this->assertEquals('Hello World', replaceLast('Hello World', 'world', 'Universe'));
		$this->assertEquals('Hello World Universe', replaceLast('Hello World World', 'World', 'Universe'));
	}
	
	public function testReplaceLastWithNullHaystack(): void {
		$this->assertEquals(null, replaceLast(null, 'World', 'Universe'));
	}
	
	public function testReplaceLastWithNullNeedle(): void {
		$this->assertEquals(null, replaceLast('Hello World', null, 'Universe'));
	}
	
	public function testReplaceLastWithNullReplacement(): void {
		$this->assertEquals('Hello ', replaceLast('Hello World', 'World', null));
	}
	
	public function testReplaceLastWithEmptyNeedle(): void {
		$this->assertEquals('Hello World', replaceLast('Hello World', '', 'Universe'));
	}
	
	public function testReplaceLastWithEmptyReplacement(): void {
		$this->assertEquals('Hello ', replaceLast('Hello World', 'World', ''));
	}
	
	public function testReplaceLastWithNeedleNotFound(): void {
		$this->assertEquals('Hello World', replaceLast('Hello World', 'Universe', 'Galaxy'));
	}
}
