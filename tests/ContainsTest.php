<?php
namespace rkr\str;

use PHPUnit_Framework_TestCase;

class ContainsTest extends PHPUnit_Framework_TestCase {
	public function testPositiveCases() {
		$this->assertTrue(contains('abc', 'b'));
		$this->assertTrue(contains('abc', 'abc'));
	}

	public function testNegativeCases() {
		$this->assertFalse(contains('abc', 'd'));
		$this->assertFalse(contains('abc', false));
		$this->assertFalse(contains('abc', null));
		$this->assertFalse(contains('abc', fopen('php://memory', 'r+')));
	}
}