<?php
namespace rkr\str;

class EndsWithTest extends \PHPUnit_Framework_TestCase {
	public function test() {
		$this->assertTrue(endsWith('abc', 'bc'));
		$this->assertFalse(endsWith('abc', 'a'));
	}
}
 