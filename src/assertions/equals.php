<?php

namespace rkr\str;

/**
 * Asserts that a string is equal to another string.
 *
 * @param string|null $string1 The first string to compare. When null, the result will be also null.
 * @param string|null $string2 The second string to compare. When null, the result will always be false.
 * @return bool Whether the two strings are equal or not.
 */
function equals(?string $string1, ?string $string2): bool {
	if($string1 === null || $string2 === null) {
		return false;
	}
	
	return $string1 === $string2;
}