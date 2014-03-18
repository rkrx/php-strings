<?php
namespace rkr\str;

class StartsWithTest extends \PHPUnit_Framework_TestCase {
	public function test() {
		$this->assertTrue(startsWith('abc', 'ab'));
		$this->assertFalse(startsWith('abc', 'c'));
	}
}
 