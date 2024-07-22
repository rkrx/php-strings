<?php

namespace rkr\str;

/**
 * Get the first character of a string.
 *
 * @param string|null $string The string to get the first character from. When null, the result will be also null.
 * @return string|null The first character of the string or null, if the input was null.
 */
function first(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_substr($string, 0, 1, 'UTF-8');
}