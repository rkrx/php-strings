<?php

namespace rkr\str;

use PHPUnit\Framework\TestCase;

class ReplaceTest extends TestCase {
	public function testReplaceWithValidStrings(): void {
		$this->assertEquals('Hello World', replace('Hello World', 'Foo', 'Bar'));
		$this->assertEquals('Hello Bar', replace('Hello Foo', 'Foo', 'Bar'));
		$this->assertEquals('Bar Bar', replace('Foo Foo', 'Foo', 'Bar'));
	}
	
	public function testReplaceWithNullHaystack(): void {
		$this->assertEquals(null, replace(null, 'Foo', 'Bar'));
	}
	
	public function testReplaceWithNullNeedle(): void {
		$this->assertEquals(null, replace('Hello World', null, 'Bar'));
	}
	
	public function testReplaceWithNullReplacement(): void {
		$this->assertEquals('Hello Foo', replace('Hello Foo', 'Foo', null));
	}
	
	public function testReplaceWithEmptyStrings(): void {
		$this->assertEquals('', replace('', '', ''));
		$this->assertEquals('Hello ', replace('Hello Foo', 'Foo', ''));
	}
	
	public function testReplaceWithSpecialCharacters(): void {
		$this->assertEquals('Héllo Wörld', replace('Héllo Wörld', 'Foo', 'Bar'));
		$this->assertEquals('Héllo Bär', replace('Héllo Föo', 'Föo', 'Bär'));
	}
}

