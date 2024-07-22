<?php

namespace rkr\str;

/**
 * Get the last character of a string.
 *
 * @param string|null $string The string to get the last character from. When null, the result will be also null.
 * @return string|null The last character of the string or null, if the input was null.
 */
function last(?string $string): ?string {
	if($string === null) {
		return null;
	}
	
	return mb_substr($string, -1, 1, 'UTF-8');
}