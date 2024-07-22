<?php

namespace rkr\str;

/**
 * Get the Unicode characters of a string.
 *
 * @param string|null $string The string to get the characters of. When null, the result will be also null.
 * @return array|null The Unicode characters of the string or null, if the input was null.
 */
function characters(?string $string): ?array {
	if($string === null) {
		return null;
	}
	
	return preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY);
}